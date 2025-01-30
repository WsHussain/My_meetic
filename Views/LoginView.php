<?php

include "Models/Register.php";
include "Models/Login.php";

if (isset($_GET['disconnect'])) {
    unset($_SESSION['connect']);
}
if (session_status() !== 2) {
    session_start();
}
if (isset($_POST['connect'])) {
    if (isset($_SESSION['connect']) && $_SESSION['connect'] != null) {
        header("Location: Views/LoginView.php");
        exit;
    }
}
if (isset($_POST['submit'])) {
    $login = new Login($_POST['username'], $_POST['password']);
    if ($register->checkRegister()) {
        $_SESSION['connect'] = $register->id;
        header("Location: Views/RegisterView.php");
        exit;
    }
}

?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Login</title>
        </head>
        <body>
            <h2>Login</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">
            </form>
        </body>
        </html>