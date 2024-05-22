<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BDE";

// Création de la connexion
$link = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($link->connect_error) {
    die("Connexion échouée: " . $link->connect_error);
}
?>