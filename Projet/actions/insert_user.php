<?php
include "../db_connection.php";

echo "Connexion réussie";

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["promo"])
) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $promo = $_POST["promo"];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO users (nom, prenom, email, password, promo) VALUES ('$nom', '$prenom', '$email', '$password', '$promo')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "Nouveau record créé avec succès";
    } else {
        echo "Erreur lors de la création du record: " . mysqli_error($link);
    }
} else {
    echo "Tous les champs du formulaire doivent être renseignés.";
}
session_start();

// Fermer la connexion
$link->close();
header("Location:../accueil.php");
?>
