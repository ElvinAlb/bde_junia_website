<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <meta charset="UTF-8"/> 
    <title>Connexion</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php include "header.html"; ?>

<main>
    <h1>Connexion</h1>
    <form action="verify_password.php" method="post">
        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</main>

<?php include "footer.html"; ?>

</body>
</html>