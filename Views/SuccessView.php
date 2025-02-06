<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <h1>Vous êtes inscrit <p><?php echo $_SESSION["user"]["username"] ?></p></h1>
    
</body>
</html>