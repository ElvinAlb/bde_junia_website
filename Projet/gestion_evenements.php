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

<?php include "header.html"; ?>
    <h1> Ajouter un évènement : </h1>
    <FORM ACTION='actions/insert_events.php' METHOD='post'>
        Nom : <INPUT TYPE="text" SIZE=30 NAME = 'name' required/> <br/>
        Date : <INPUT TYPE="date" NAME='date' required/> <br/>
        Description : <INPUT TYPE="text" SIZE=255 NAME='description' required/> <br/>
        Capacité : <INPUT TYPE="number" SIZE=2 NAME='capacity' required/> <br/>
        <INPUT TYPE='SUBMIT' VALUE='Valider'/> <br/>
        </FORM>

    <?php
    include 'db_connection.php';

    echo "<h1> Liste des évènements : </h1>";
    $query =
        "SELECT idEvent, nom, date, description, capacite FROM evenements ORDER BY idEvent";

    echo "<table>";

    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form action='actions/modif_events.php' method='post'>";
        echo "<td>ID : <input type='hidden' name='id' value='" .
            $row["idEvent"] .
            "'>" .
            $row["idEvent"] .
            "</td>";
        echo "<td>Nom : <input type='text' name='nom' value='" .
            $row["nom"] .
            "'></td>";
        echo "<td>Date : <input type='date' name='date' value='" .
            $row["date"] .
            "'></td>";
        echo "<td>Description : <input type='text' name='description' value='" .
            $row["description"] .
            "'></td>";
        echo "<td>Capacité : <input type='text' name='capacite' value='" .
            $row["capacite"] .
            "'></td>";
        echo "<td>
                <button type='submit' name='action' value='modifier'>Modifier</button>
                <button type='submit' name='action' value='supprimer'>Supprimer</button>
              </td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
    ?>





</body>

<?php include "footer.html"; ?>  

</html>