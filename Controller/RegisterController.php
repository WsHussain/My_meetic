<?php

//require 'LoginController.php';
include 'Models/Register.php';

class RegisterController
{
    private $registerModel;

    public function __construct() {
        $this->registerModel = new Register();
    }

    public function register($username, $email, $password) {
       $res = $this->registerModel->registerUser($username, $email, $password);
       //var_dump($res);
       //header('Location: /');
        
    }
}

// $registerController = new RegisterController($db);

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $registerController->register();
// }

?>