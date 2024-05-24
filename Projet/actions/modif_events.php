<?php
include "../db_connection.php"; // Inclure le fichier de connexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $action = $_POST["action"];

    if ($action == "modifier") {
        $nom = $_POST["nom"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $capacite = $_POST["capacite"];
        $sql = "UPDATE evenements SET nom='$nom', date='$date', description='$description', capacite='$capacite' WHERE idEvent=$id";

        if ($link->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error modifying record: " . $link->error;
        }
    } elseif ($action == "supprimer") {
        $sql = "DELETE FROM evenements WHERE idEvent=$id";

        if ($link->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $link->error;
        }
    }
}

$link->close();
header("Location:../gestion_evenements.php");
?>
