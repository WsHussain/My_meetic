<?php

require ("../Controller/LoginController.php");

if (isset ($_POST['email'])){
    $loginController = new LoginController(); 
    $loginController->login($_POST['email'], $_POST['password']);
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
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>