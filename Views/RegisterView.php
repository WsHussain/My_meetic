<?php

include './Controller/RegisterController.php';

if(isset($_POST['submit'])){
    
    $register = new RegisterController();
    $register->register(
        $_POST['username'], 
        $_POST['email'], 
        $_POST['password'], 
        $_POST['firstname'], 
        $_POST['lastname'], 
        $_POST['age'], 
        $_POST['city'], 
        $_POST['gender']
    );
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Register.css">
        <title>Créer votre compte</title>
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <p>Créer votre compte</p>
                <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Mot de passe" required><br>
                <input type="text" name="firstname" placeholder="Prénom" required><br>
                <input type="text" name="lastname" placeholder="Nom" required><br>
                <input type="number" name="age" placeholder="Age" required><br>
                <input type="text" name="city" placeholder="Ville" required><br>
                <select name="gender" required>
                    <option value="" disabled selected>Genre</option>
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                    <option value="other">Autre</option>
                </select><br>
                <input type="submit" name="submit" value="S'inscrire"><br>
            </form>
        </div>
    </body>
</html>