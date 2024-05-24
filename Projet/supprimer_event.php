<?php
include 'db_connection.php';

$id = $_POST["id"];
$sql = "DELETE FROM evenements WHERE idEvent=$id";

if ($link->query($sql) === true) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

// Fermer la connexion
$link->close();
header("Location:events.php");
?>
