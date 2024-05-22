<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "BDE";
// Créer une connexion
$link = mysqli_connect($servername, $username, $password, $dbname);

echo "Connexion réussie";

$id = $_POST['id'];
$sql = "DELETE FROM evenements WHERE idEvent=$id";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}


// Fermer la connexion
$link->close();
header("Location:events.php");
?>
