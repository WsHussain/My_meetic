<?php

include 'Models/Register.php';

class RegisterController
{
    private $register_controller;

    public function __construct($db)
    {
        $this->register_controller = new Register();
    }

    public function register($username, $password, $email)
    {
        echo "tototottotoo";
        $this->register_controller->registerUser($username, $password, $email);
        header('Location: /');
        
    }
}