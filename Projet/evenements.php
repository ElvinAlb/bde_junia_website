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
    <h1> Tous les évènements à venir : </h1>

    <?php
    include 'db_connection.php';

    $query1 = "SELECT idEvent, nom, date, description, capacite FROM evenements WHERE date > CURDATE() ORDER BY idEvent";
    $result1 = mysqli_query($link, $query1);
    ?>
            <?php if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    $eventId = $row['idEvent'];
                    $query2 = "SELECT COUNT(*) AS nb_inscrits FROM inscriptions WHERE idEvent=$eventId";
                    $result2 = mysqli_query($link, $query2);
                    $nb_inscrits = mysqli_fetch_assoc($result2)['nb_inscrits'];

                    echo "<tr>";
                    echo "<td> ID : " .
                        htmlspecialchars($row["idEvent"]) .
                        "</td> ";
                    echo "<td><h1>" .
                        htmlspecialchars($row["nom"]) .
                        "</h1></td> ";
                    echo "<td><p> Description : " .
                        htmlspecialchars($row["description"]) .
                        "</p></td>";
                    echo "<td> Date : " .
                        htmlspecialchars($row["date"]) .
                        "</td>";
                    echo "<td> ".$nb_inscrits." place(s) réservée(s) sur " .
                        htmlspecialchars($row["capacite"]) .
                        "</td>";
                    echo "</tr><br/>";
                }
                echo "<form action='inscription.php' method='get'>
                <button type='submit' class='btn btn-primary'>S'inscrire à un évènement</button>
            </form>";
                mysqli_close($link);
            } else {
                echo "<p>Aucun évènement à venir :( Veuillez vous référer à Yvi</p>";
            } ?>

</body>

<?php include "footer.html"; ?>  

</html>