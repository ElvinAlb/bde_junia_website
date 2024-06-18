<?php session_start();include 'db_connection.php'; ?>

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

<?php include "header.php";
$id = $_GET["idEvent"];
$query = "SELECT nom FROM evenements WHERE idEvent=$id";
$evenement = mysqli_query($link, $query);
if(mysqli_num_rows($evenement) > 0) {
$row = mysqli_fetch_assoc($evenement);
$nom_evenement = htmlspecialchars($row['nom']);
} else {
    $nom_evenement = "Évènement non trouvé";
    }
    ?>
    <h1>Inscription <?php echo $nom_evenement; ?></h1>
    
    <FORM ACTION='actions/insert_inscription.php?idEvent=<?php echo htmlspecialchars($_GET['idEvent']); ?>' METHOD='post'>
    <?php

    ?>
        Nom : <INPUT TYPE=TEXT SIZE=20 NAME = 'nom' required> <br/>
        Prénom : <INPUT TYPE=TEXT SIZE=20 NAME='prenom' required> <br/>
        Email : <INPUT TYPE=TEXT SIZE=20 NAME='email' required> <br/>
        <select id="promo" name="promo" required>
                <option value="ADI1">ADI1</option>
                <option value="ADI2">ADI2</option>
                <option value="AP3">AP3</option>
                <option value="AP4">AP4</option>
                <option value="AP5">AP5</option>
            </select>
        <INPUT TYPE='SUBMIT' VALUE='Valider'/> <br/>
        </FORM>

</body>

<?php include "footer.html"; ?>  

</html>