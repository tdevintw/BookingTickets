<?php

namespace App\Model;

use app\Models\Model;
use PDOException;

class SignupModel 
{
    public function createUser($data)
    {   
        
        $tableName = 'users';
        Model::insertRecord($tableName, $data);
    }
}