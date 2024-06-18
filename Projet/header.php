<head>
<link href="style/style_header.css" type="text/css" rel="stylesheet">
</head>
<header>
    <link href="style/style_header.css" type="text/css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil.php">
                <img src="img/texte_bde_white.png" alt="BDE Naeptune" class="text_logo">
                <img src="img/logo_bde.png" alt="Logo Naeptune" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-header" href="evenements.php">Événements</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link text-header" href="contact.php">Contact</a>
                    </li>
                    <?php if (isset($_SESSION["email"])) {
                        if ($_SESSION["admin"] == 1) {
                            echo "<li class='nav-item'>
                        <a class='nav-link text-header' href='gestion_evenements.php'>Gestion évènements</a>
                    </li>";
                            echo "<li class='nav-item'>
                        <a class='nav-link text-header' href='gestion_inscriptions.php'>Gestion inscriptions</a>
                    </li>";
                        }
                        echo "<li class='nav-item text-header'>
                        <a class='nav-link text-header' href='actions/logout.php'>Déconnexion</a>
                    </li>";
                    } else {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Connexion</a>
                    </li>";
                    } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>