<?php
session_start() ;
include('Controller/LoginController.php'); 

class Login {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function authenticate($username, $password) {
        $psw=hash('sha256', $password);
        $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username And password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $psw);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $query = $stmt->rowCount() > 0;

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

}

require('../Views / LoginView.php');