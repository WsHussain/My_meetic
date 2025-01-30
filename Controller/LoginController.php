<?php

include 'db.php';

class RegisterController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function register($username, $password, $email)
    {

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->db->prepare("INSERT INTO user (username, password, email) VALUES (:username, :password, :email)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            return "Utilisateur enregistré avec succès !";
        } else {
            return "Erreur : Impossible d'enregistrer l'utilisateur.";
        }
    }
}