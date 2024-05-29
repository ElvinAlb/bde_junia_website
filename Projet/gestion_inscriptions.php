<?php session_start(); ?>

<?php

if (!isset($_SESSION['email']) || !$_SESSION['admin']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8"/> 
    <title>BDE Naeptune</title>
    <link href="style/style_footer.css" type="text/css" rel="stylesheet">
    <link href="style/style_header.css" type="text/css" rel="stylesheet">
    <link href="style/style_form.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4C+2XonQ6dLLJz1q5Yc6RaO1I5F/4ajEe3K5oS/1jT1UpBs1sTTX9KJXPE6we3vI8STuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php include "header.php"; ?>

    <?php
    include 'db_connection.php';

    echo "<h1> Liste des inscrits : </h1>";
    $query = "SELECT idEvent, nom, prenom, email FROM inscriptions ORDER BY idEvent";

    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID évènement</th>";
    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $result = mysqli_query($link, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["idEvent"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["nom"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["prenom"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Aucune inscription trouvée.</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";

    mysqli_close($link);
    ?>





</body>

<?php include "footer.html"; ?>  

</html>