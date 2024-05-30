<?php
session_start();
include "../db_connection.php";

echo "Connexion réussie";

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $nom = $_SESSION["nom"];
    $prenom = $_SESSION["prenom"];
    $idEvent = $_GET["idEvent"];

    $query2 = "SELECT COUNT(*) AS nb_inscrits FROM inscriptions WHERE idEvent=$idEvent";
    $result2 = mysqli_query($link, $query2);
    $nb_inscrits = mysqli_fetch_assoc($result2)["nb_inscrits"];

    $query3 = "SELECT capacite FROM evenements WHERE idEvent=$idEvent";
    $result3 = mysqli_query($link, $query3);
    $capacite = mysqli_fetch_assoc($result3)["capacite"];

    if ($capacite - $nb_inscrits > 0) {
        // Préparer et exécuter la requête d'insertion
        $query1 = "INSERT INTO inscriptions (idEvent, nom, prenom, email) VALUES ('$idEvent', '$nom', '$prenom', '$email')";
        $result1 = mysqli_query($link, $query1);
    }

    if ($result1) {
        echo "Inscription réalisée avec succès";
    } else {
        echo "Aucune place disponible pour cet évènement." .
            mysqli_error($link);
    }
} else {
    echo "Tous les champs du formulaire doivent être renseignés.";
}

// Fermer la connexion
$link->close();
header("Location:../evenements.php");
?>
