<?php

include 'db.php';
require 'LoginController.php';

class RegisterController
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($password !== $confirmPassword) {
                echo 'Les mots de passe ne correspondent pas';
                return;
            }

            $stmt = $this->db->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user) {
                echo 'email est déjà utilisé';
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
            $stmt->execute([$email, $hashedPassword]);

            echo 'Inscription reussie';
        }
    }
}

$registerController = new RegisterController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registerController->register();
}

?>