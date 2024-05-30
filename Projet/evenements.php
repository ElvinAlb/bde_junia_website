<?php session_start(); ?>

<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8"/> 
    <title>BDE Naeptune</title>
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

<div class="events-container">
            <?php while($row = mysqli_fetch_assoc($result1)) { ?>
                <?php 
                $eventId = $row['idEvent'];
                $query2 = "SELECT COUNT(*) AS nb_inscrits FROM inscriptions WHERE idEvent=$eventId";
                $result2 = mysqli_query($link, $query2);
                $nb_inscrits = mysqli_fetch_assoc($result2)['nb_inscrits'];    
                    ?>
                <div class="event-card">
                    <h2><?php echo htmlspecialchars($row["nom"]); ?></h2>
                    <p><strong>Date:</strong> <?php echo htmlspecialchars($row["date"]); ?></p>
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($row["description"]); ?></p>
                    <p><strong>Inscriptions:</strong> <?php echo $nb_inscrits."/" .
                        htmlspecialchars($row["capacite"])?></p>
                    <?php 
                    if(isset($_SESSION['email'])){
                        echo "<a href='actions/inscription_connected.php?idEvent=$eventId'><button>M'inscrire</button></a>";
                    }
                    else{
                    
                        echo "<a href='inscription.php?idEvent=$eventId'><button>M'inscrire</button></a>";
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
        </container>
</body>

<?php include "footer.html"; ?>  

</html>