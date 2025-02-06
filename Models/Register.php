<?php 

require_once '../config/db.php';

class Register {
    private $db; 

    public function __construct() {
        $this->db = my_db();
    }

    public function registerUser($username, $email, $password, $firstname, $lastname, $age, $city, $gender) {
        try {

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = $this->db->prepare ("INSERT INTO user (username, firstname, lastname, age, city, email, password, gender) 
            VALUES ('$username', '$firstname', '$lastname', '$age', '$city', '$email', '$hashedPassword' , '$gender')");

        $query->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}