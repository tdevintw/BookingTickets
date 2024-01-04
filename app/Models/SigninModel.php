<?php

namespace App\Model;

use app\Models\Model;
use PDOException;

class SigninModel extends Model
{
    public function authenticateUser($AdresseEmail, $MotDePasse)
    {
        try {
            $tableName = "users";
            $query = "SELECT * FROM $tableName WHERE email = :email";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(":email", $AdresseEmail, \PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user) {
                // Verify hashed password
                if (password_verify($MotDePasse, $user['password'])) {
                    // Authentication successful
                    echo "User authenticated successfully!";
                    return $user;
                } else {
                    // Authentication failed
                    echo "Invalid email or password.";
                    return null;
                }
            } else {
                // Authentication failed
                echo "Invalid email or password.";
                return null;
            }
        } catch (PDOException $e) {
            echo "Error authenticating user: " . $e->getMessage();
            return null;
        }
    }
}
?>