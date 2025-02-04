<?php

match ($_SERVER['REQUEST_URI']) {
    "/" => require 'Views/Viewindex.php',
    '/log' => require 'Views/LoginView.php',
    '/register' => require 'Views/RegisterView.php',
};
