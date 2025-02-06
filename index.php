<?php

match ($_SERVER['REQUEST_URI']) {
    "/" => require 'Views/accueil.php',
    '/log' => require 'Views/LoginView.php',
    '/register' => require 'Views/RegisterView.php',
    '/profile' => require 'Views/ProfileView.php',
    '/sucess' => require 'Views/SuccessView.php',
    '/error' => require 'Views/RegisterView.php',
};


