<?php

match ($_SERVER['REQUEST_URI']) {
    "/" => require 'Views/acceuil.php',
    '/log' => require 'Views/LoginView.php',
    '/register' => require 'Views/RegisterView.php',
    '/profile' => require 'Views/ProfileView.php',
};


