<?php

//require 'LoginController.php';
include 'Models/Register.php';

class RegisterController
{
    private $registerModel;

    public function __construct() {
        $this->registerModel = new Register();
    }

    public function register($username, $email, $password, $firstname, $lastname, $age, $city, $gender) {
        if (empty($username) || empty($email) || empty($password) || empty($firstname) || empty($lastname) || empty($age) || empty($city) || empty($gender)) { 
            throw new Exception('Tous les champs sont obligatoires.');
        }
        $this->registerModel->registerUser($username, $email, $password, $firstname, $lastname, $age, $city, $gender);
    }
}

?>