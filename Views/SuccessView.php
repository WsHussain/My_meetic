<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profile.css">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Your profile information</div>
        <form action="profileUpdate.php" method="post">
            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" name="firstname" placeholder=" " value="<?php echo $_SESSION["user"]["firstname"]; ?>" required />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">First name</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" class="input" type="text" name="lastname" placeholder=" " value="<?php echo $_SESSION["user"]["lastname"]; ?>" required />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Last name</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="email" name="email" placeholder=" " value="<?php echo $_SESSION["user"]["email"]; ?>" required />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input id="age" class="input" type="number" name="age" placeholder=" " value="<?php echo $_SESSION["user"]["age"]; ?>" required />
                <div class="cut cut-short"></div>
                <label for="age" class="placeholder">Age</label>
            </div>
            <div class="input-container ic2">
                <input id="city" class="input" type="text" name="city" placeholder=" " value="<?php echo $_SESSION["user"]["city"]; ?>" required />
                <div class="cut cut-short"></div>
                <label for="city" class="placeholder">City</label>
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>