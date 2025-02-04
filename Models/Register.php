<?php 
include 'Controller/RegisterController.php';

class Register {
    private $db; 

    public function __construct() {
        $this->db = my_db();
    }

    public function registerUser($firstname,$lastname,$age,$city,$gender,$username, $email, $password) {
        try {

            require_once './config/db.php';
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = $pdo -> prepare ("INSERT INTO user (username, firstname, lastname, age, city, email, password) 
            VALUES ('$username', '$email', '$hashedPassword','$firstname','$lastname','$age','$city','$gender')");

            $query ->  bindParam(':username', $username);
            $query ->  bindParam(':firstname', $firstname);
            $query ->  bindaram(':lastname', $lastname);
            $query ->  bindparam(':age', $age);
            $query ->  bindparam(':city', $city);
            $query ->  bindparam(':email', $email);
            $query ->  bindparam(':password', $hashedPassword);

        $this->db->query($query);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}