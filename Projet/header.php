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
                        <a class="nav-link text-header" href="evenements.php">Evenements</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulaire.php">Mon compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Se connecter</a>
                    </li>
                    <?php if($_SESSION['admin'] == 1){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='gestion_evenements.php'>Gestion évènements</a>
                    </li>";
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='gestion_inscriptions.php'>Gestion inscriptions</a>
                    </li>";
                    }?>
                </ul>
            </div>
        </div>
    </nav>
</header>