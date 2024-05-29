<?php
include '../db_connection.php';

echo "Connexion réussie";

if (isset($_POST['idEvent']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
    $idEvent = $_POST['idEvent'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO inscriptions (idEvent, nom, prenom, email) VALUES ('$idEvent', '$nom', '$prenom', '$email')";
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
header("Location:../gestion_inscriptions.php");
?>