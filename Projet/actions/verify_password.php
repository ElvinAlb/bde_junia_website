<?php
session_start();

include "../db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Préparer la requête SQL pour éviter les injections SQL
    $stmt = $link->prepare(
        "SELECT id, nom, prenom, password, admin FROM users WHERE email = ?"
    );
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    $sql = "SELECT email, password FROM users WHERE email='email'";

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nom, $prenom, $hashed_password, $admin);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Mot de passe correct, démarrer une session
            $_SESSION["admin"] = $admin;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;

            // Redirection vers la page des événements ou autre page protégée
            header("location: ../accueil.php");
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Nom d'utilisateur incorrect
        echo "Nom d'utilisateur incorrect.";
    }

    $stmt->close();
}

$link->close();
?>
