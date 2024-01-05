<?php

namespace app\Models;

class Model
{
    private static $pdo = null;

    protected static function selectRecords(string $table, string $columns = "*", string $where = null)
    {
        self::connect();
        try {
            $sql = "SELECT $columns FROM $table";

            if ($where !== null) {
                $sql .= " WHERE $where";
            }

            // Prepare the SQL query
            $stmt = self::$pdo->prepare($sql);
            
            // Execute the prepared statement with any bound parameters
            $stmt->execute();
            
            // Fetch the result set as an associative array
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            self::deconnect();
            return $result;
        } catch (\PDOException $e) {
            self::deconnect();
            return null;
        }
    }

    protected static function insertRecord(string $table, array $data)
    {
        self::connect();
        // Use prepared statements to prevent SQL injection
        $columns = implode(', ', array_keys($data));

        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        try {
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

            $stmt = self::$pdo->prepare($sql);


            // Bind parameters to the prepared statement by reference
            $i = 1;
            foreach ($data as $key => &$value) {
                $stmt->bindParam($i, $value);
                $i++;
            }
            $stmt->execute();
            $lastId = self::$pdo->lastInsertId();
            self::deconnect();
            return $lastId;
        } catch (\PDOException $e) {
            self::deconnect();
            return false;
        }
    }

    protected static function updateRecord($table, $data, $id)
    {
        self::connect();
        // Use prepared statements to prevent SQL injection
        $args = array();

        foreach ($data as $key => $value) {
            $args[] = "$key = ?";
        }
        try {
            $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE id = ?";

            $stmt = self::$pdo->prepare($sql);

            if (!$stmt) {
                die("Error in prepared statement: " . self::$pdo->errorInfo()[2]);
            }

            // Bind parameters to the prepared statement

            $i = 1;
            foreach ($data as $key => &$value) {
                $stmt->bindParam($i, $value);
                $i++;
            }
            $stmt->bindParam($i, $id);



            // Execute the prepared statement
            $stmt->execute();
            self::deconnect();
            return true;
        } catch (\PDOException $e) {
            self::deconnect();
            return false;
        }
    }

    protected static function deleteRecord(string $table, int $id)
    {
        self::connect();
        try {
            // Use prepared statements to prevent SQL injection
            $sql = "DELETE FROM $table WHERE id = ?";
            $stmt = self::$pdo->prepare($sql);



            // Bind parameters to the prepared statement
            $stmt->bindParam(1, $id);

            // Execute the prepared statement
            $stmt->execute();
            self::deconnect();
            return true;
        } catch (\PDOException $e) {
            self::deconnect();
            return false;
        }
    }

    private static function connect()
    {
        if (!self::$pdo) {
            $config = require("./core/database.php");
            self::$pdo = new \PDO(
                'mysql:host=' . $config['mysql']['host'] . ';dbname=' . $config['mysql']['dbname'],
                $config['mysql']['username'],
                $config['mysql']['password']
            );
        }
    }

    private static function deconnect(){
        self::$pdo = null;
    }
}
