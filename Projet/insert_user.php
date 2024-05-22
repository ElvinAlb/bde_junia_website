<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "BDE";

// Créer une connexion
$link = mysqli_connect($servername, $username, $password, $dbname);


// Vérifier la connexion
//if ($link->connect_error) {
  //  die("Connexion échouée: " . $link->connect_error);
//}
echo "Connexion réussie";

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['evenement'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $evenement = $_POST['evenement'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO users (nom, prenom, email, evenement) VALUES ('$nom', '$prenom', '$email', '$evenement')";
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
//header("Location:formulaire.php");
?>