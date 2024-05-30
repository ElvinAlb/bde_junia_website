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

    <h1>Se connecter</h1>

    <form action="actions/verify_password.php" method="post">
        <div>
            <label for="username">Email :</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>

    <h1>Pas encore de compte ?</h1>

    <FORM ACTION='actions/insert_user.php' METHOD='post'>
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="surname">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="text" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="promo">Promotion :</label>
            <select id="promo" name="promo" required>
                <option value="ADI1">ADI1</option>
                <option value="ADI2">ADI2</option>
                <option value="AP3">AP3</option>
                <option value="AP4">AP4</option>
                <option value="AP5">AP5</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Valider">
        </div>
        </FORM>
</body>

<?php include "footer.html"; ?>

</html>