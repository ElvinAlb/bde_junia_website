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

<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="accueil.html">
                    <img src="img/texte_bde_white.png" alt="BDE Naeptune" class="text_logo">
                    <img src="img/logo_bde.png" alt="Logo Naeptune" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="events.html">Evenements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <FORM ACTION='insert_events.php' METHOD='post'>
      <label>Ajout d'un évènement : </label><br/>

        Nom : <INPUT TYPE="text" SIZE=30 NAME = 'name' required/> <br/>
        Date : <INPUT TYPE="date" NAME='date' required/> <br/>
        Description : <INPUT TYPE="text" SIZE=255 NAME='description' required/> <br/>
        Capacité : <INPUT TYPE="number" SIZE=2 NAME='capacity' required/> <br/>
        <INPUT TYPE='SUBMIT' VALUE='Valider'/> <br/>
        </FORM>

</body>

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>A propos</h6>
          <p class="text-justify">Adhère au BDE sinon Yvi viendra chez toi te menacer dans ton sommeil</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Navigation</h6>
          <ul class="footer-links">
            <li><a href="events.html">Evenements</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="">Conformité RGPD</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by Le Club Brésilienne.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="instagram" href="https://www.instagram.com/bde_naeptune/"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>  

</html>