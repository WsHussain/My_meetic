<?php

include 'Models/Login.php';

class LoginController {
    private $login;

    public function __construct($db) {
        $this->login = new Login($db);
    }

    public function login($username, $password) {
        $user = $this->login->authenticate($username, $password);
        if ($user) {
            // Start session and set user data
            session_start();
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }
}
