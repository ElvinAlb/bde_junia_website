<?php
// // Paramètres de connexion à la base de données
// $servername = "localhost";
// $username = "root";
// $password = '';
// $dbname = "BDE";

// // Créer une connexion
// $link = mysqli_connect($servername, $username, $password, $dbname);

include 'db_connection.php';

if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['description']) && isset($_POST['capacity'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $capacity = $_POST['capacity'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO evenements (nom, date, description, capacite) VALUES ('$name', '$date', '$description', '$capacity')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "Nouveau record créé avec succès";
    } else {
        echo "Erreur lors de la création du record: " . mysqli_error($link);
    }
} else {
    echo "Tous les champs du formulaire doivent être renseignés.";
}


// Fermer la connexion
$link->close();
header("Location:events.php");
?>