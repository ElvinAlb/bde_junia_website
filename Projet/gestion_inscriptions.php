<?php session_start(); ?>

<?php if (!isset($_SESSION["email"]) || !$_SESSION["admin"]) {
    header("Location: login.php");
    exit();
} ?>

<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8"/> 
    <title>BDE Naeptune</title>
    <link href="style/style_form.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4C+2XonQ6dLLJz1q5Yc6RaO1I5F/4ajEe3K5oS/1jT1UpBs1sTTX9KJXPE6we3vI8STuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .table-container {
            width: 80%; /* Ajustez ce pourcentage selon vos besoins */
            margin: 0 auto; /* Centrer le conteneur */
        }
        .table th, .table td {
            text-align: center;
        }
        .table th:nth-child(1), .table td:nth-child(1) {
            width: 30%;
        }
        .table th:nth-child(2), .table td:nth-child(2) {
            width: 30%;
        }
        .table th:nth-child(3), .table td:nth-child(3) {
            width: 40%;
        }
    </style>
</head>

<body>

<?php include "header.php"; ?>

    <?php
    include "db_connection.php";

    echo "<h1> Liste des inscrits par évènement : </h1>";
    $event_query = "SELECT idEvent, nom FROM evenements ORDER BY idEvent";
    $event_result = mysqli_query($link, $event_query);

    if ($event_result) {
        while ($event_row = mysqli_fetch_assoc($event_result)) {
            $event_id = $event_row["idEvent"];
            $event_name = $event_row["nom"];

            echo "<div class='table-container'>";
            echo "<h2>" . htmlspecialchars($event_name) . "</h2>";

            // Récupérer les inscriptions pour chaque événement
            $inscription_query = "SELECT nom, prenom, email FROM inscriptions WHERE idEvent = $event_id";
            $inscription_result = mysqli_query($link, $inscription_query);

            if (mysqli_num_rows($inscription_result) > 0) {
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Nom</th>";
                echo "<th>Prénom</th>";
                echo "<th>Email</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while (
                    $inscription_row = mysqli_fetch_assoc($inscription_result)
                ) {
                    echo "<tr>";
                    echo "<td>" .
                        htmlspecialchars($inscription_row["nom"]) .
                        "</td>";
                    echo "<td>" .
                        htmlspecialchars($inscription_row["prenom"]) .
                        "</td>";
                    echo "<td>" .
                        htmlspecialchars($inscription_row["email"]) .
                        "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Aucune inscription.</p>";
            }
            echo "</div>";
        }
    } else {
        echo "<p>Aucun évènement trouvé.</p>";
    }

    mysqli_close($link);
    ?>





</body>

<?php include "footer.html"; ?>  

</html>