<?php
session_start() ;
include('./config/db.php');
include('./Controller/LoginController.php'); 

class Login {
    private $db;

    public function authenticate($username, $password) {
        $psw=hash('sha256', $password);
        $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username And password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $psw);
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt->rowCount();
    }

}