<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8"/> 
    <title>BDE Naeptune</title>
    <link href="style/style_footer.css" type="text/css" rel="stylesheet">
    <link href="style/style_header.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4C+2XonQ6dLLJz1q5Yc6RaO1I5F/4ajEe3K5oS/1jT1UpBs1sTTX9KJXPE6we3vI8STuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php include "header.html"; ?>

    <main>
        <h1>Evènements à venir :</h1>

        
        <container>
            
            <?php
            include 'db_connection.php';

            $query =
                "SELECT idEvent, nom, date, description, capacite FROM evenements WHERE date > CURDATE() ORDER BY idEvent";
            $result = mysqli_query($link, $query);
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><h2>" .
                    htmlspecialchars($row["nom"]) .
                    "</h2></td> ";
                echo "<td> Date : " . htmlspecialchars($row["date"]) . "</td>";
                echo "<td> Description : " .
                    htmlspecialchars($row["description"]) .
                    "</td>";
                echo "<td> Nombre max de personnes : " .
                    htmlspecialchars($row["capacite"]) .
                    "</td>";
                echo "</tr><br/>";
            } ?>
        </container>


    </main>

    <?php include "footer.html"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoPSCCOlvOqBzafKdl6Ri4m2EdP8rjFS+Ks7F0XqbbFjEJ9" crossorigin="anonymous"></script>
</body>
</html>
