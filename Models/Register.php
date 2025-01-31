<?php 

include 'db.php';

class Register {
    private $db;

    public function __construct() {
        $this->db = my_db();
    }

    public function registerUser($username, $email, $password) {
        try {

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO user (firstName, mail, password) VALUES ('$username', '$email', '$hashedPassword')";
        
        $res = $this->db->query($query);
        var_dump($res);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function isEmailTaken($email) {
        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}