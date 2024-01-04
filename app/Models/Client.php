<?php

namespace app\Models;

class Client extends Model
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function select($where = null)
    {
        if ($where === null)
            return Model::selectRecords("clients");
        return Model::selectRecords('clients', '*', $where);
    }

    public static function delete($id)
    {
        return parent::deleteRecord('clients', $id);
    }
}