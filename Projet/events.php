<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta charset="UTF-8"/> 
	<title>BDE Naeptune</title>
</head>

<body>

    <header>
        BDE Naeptune
    </header>

    <FORM ACTION='insert_events.php' METHOD='post'>

        Nom : <INPUT TYPE="text" SIZE=100 NAME = 'name' required/> <br/>
        Date : <INPUT TYPE="date" SIZE=20 NAME='date' required/> <br/>
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