<?php

function my_db() {

    $servername = "localhost";
    $username = "waqashu";
    $password = "Waqas_zenitsu";
    $dbname = "meetic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

}

?>