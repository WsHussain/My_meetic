<?php

require_once '../Models/Login.php';

class LoginController {
    private $login;

    public function __construct() {
        $this->login = new Login();

    
    }

    public function login($email, $password) {
        $user = $this->login->authenticate($email, $password);
        //var_dump($user);
        if ($user[0]["id"]) {
            session_start();
            $_SESSION['user'] = $user[0];
            header('Location: /sucess');
            exit();
        } else {
            header('Location: /error');
        }
    }
}
