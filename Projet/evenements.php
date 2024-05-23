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

<?php include 'header.html'?>
    <h1> Tous les évènements à venir : </h1>

    <?php         
    
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "BDE";
    // Afficher tous les évènements
    // Créer une connexion
    $link = mysqli_connect($servername, $username, $password, $dbname);
   
    
            $query = "SELECT idEvent, nom, date, description, capacite FROM evenements WHERE date > CURDATE() ORDER BY idEvent";
            $result = mysqli_query($link, $query);?>
            <?php
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td> ID : ". htmlspecialchars($row['idEvent']) . "</td> ";
            echo "<td> Evènement : ". htmlspecialchars($row['nom']) . "</td> ";
            echo "<td> Date : " . htmlspecialchars($row['date']) . "</td>";
            echo "<td> Description : " . htmlspecialchars($row['description']) . "</td>";
            echo "<td> Nombre max de personnes : " . htmlspecialchars($row['capacite']) . "</td>";
            echo "<td><form action='supprimer_event.php' method='post'>
                  <input type='hidden' name='id' value='" . $row['idEvent'] . "'>
                  <input type='submit' name='supp' value='Supprimer'>
              </form></td>";
            echo "</tr><br/>";}
            mysqli_close($link);
            } else {
                echo "<p>Aucun évènement à venir :( Veuillez vous référer à Yvi</p>";
                }

            

            ?>





</body>

<?php include 'footer.html'?>  

</html>