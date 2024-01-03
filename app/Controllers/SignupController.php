<?php

namespace App\Controller;

use App\Model\SignupModel;

class SignupController
{
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
         
            $name = $_POST["fullName"];
            $email = $_POST["email"];
            $password = password_hash($_POST["MotDePasse"], PASSWORD_DEFAULT); // Hash the password

            // Create an instance of SignupModel
            $signupModel = new SignupModel();

            // Data to be inserted into the 'users' table
            $userData = [
              
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];

            // Call the createUser method in SignupModel to insert the user into the database
            $signupModel->createUser($userData);
        } else {
            include("../app/View/Signup.php");
        }
    }
}