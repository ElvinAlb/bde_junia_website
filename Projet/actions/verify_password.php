<?php
session_start();

include '../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparer la requête SQL pour éviter les injections SQL
    // $stmt = $link->prepare("SELECT id, password FROM users WHERE username = ?");
    // $stmt->bind_param("s", $username);
    // $stmt->execute();
    // $stmt->store_result();


    $sql = "SELECT email, password FROM users WHERE email='email'";
    
    
    $nb = "SELECT COUNT(*) FROM users WHERE email='email'";

    if ($link->query($nb)->num_rows == 1) {
        echo "saisir le mdp";
    } else {
        echo "Email incorrect" . $link->error;
    }
    
    // if ($stmt->num_rows > 0) {
    //     $stmt->bind_result($id, $hashed_password);
    //     $stmt->fetch();
        
    //     if (password_verify($password, $hashed_password)) {
    //         // Mot de passe correct, démarrer une session
    //         $_SESSION["loggedin"] = true;
    //         $_SESSION["id"] = $id;
    //         $_SESSION["username"] = $username;
            
    //         // Redirection vers la page des événements ou autre page protégée
    //         header("location: ../accueil.php");
    //     } else {
    //         // Mot de passe incorrect
    //         echo "Mot de passe incorrect.";
    //     }
    // } else {
    //     // Nom d'utilisateur incorrect
    //     echo "Nom d'utilisateur incorrect.";
    // }
    
    // $stmt->close();
}

$link->close();
?>