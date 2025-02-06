<?php
session_start() ;
 include('../config/db.php');
// include('../Controller/LoginController.php'); 

class Login {
    private $db;
    public function __construct() {
        $this->db = my_db();
    }

    public function authenticate($email, $password) {
        var_dump($email, $password);

        $password=hash('sha256', $password);
        $stmt = $this->db->prepare("SELECT * FROM user WHERE email = :email And password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($res);
        return $res;
    }

}