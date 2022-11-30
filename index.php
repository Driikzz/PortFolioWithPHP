<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <meta name="description" content="Ceci est notre portfolio, pour exposer notres travail, au monde entier !">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
  </head>
  
  <body>

    <?php 
    $page = "accueil";
    require "component/menu.php";
    ?>
    
    <div class="parallax-container">
      <div class="parallax parallax1"><img src="img/paralax1.jpg" alt="image restaurant néon"></div>
      <div class="text-paralax center-align">
        <a href="projet-culinaire.html" class="waves-effect waves-light btn">Projet 1</a>
      </div>
    </div>
    
    <div class="section white black-text test">
      <div class="row center-align">
        <div class="col s12 l6" id="p-container-title">
          <img class="circle responsive-img animate__animated animate__pulse animate__infinite	infinite animate__slower img-autor" src="img/pp-pacome.jpg" alt="image-pacome" id="image"/>
          <h2>Danilo Pacôme</h2>
          <p class="container">Je me présente Danilo Pacôme j'ai 18 ans, je suis en première année au sein de l'école Gaming Campus dans la section tech. Je viens d'arriver sur la ville de Lyon.</p>
          <ul class="container collapsible black-text">
            <li>
              <div class="collapsible-header">
                <i class="material-icons">fingerprint</i>Identitée
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Danilo Pacôme, Bachelier en STI2D et viens d'intégrer il y a peu l'école Gaming Campus en première année de Programming.</span>
              </div>
            </li>
            <li>
              <div class="collapsible-header">
                <i class="material-icons">place</i>Localisation
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Pur souche bretonne, venue de si loin pour devenir un vrai G.Tech.</span>
              </div>
            </li>
            <li>
              <div class="collapsible-header">
                <i class="material-icons">code</i>Code
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Débutant dans la matière, j'apprends le HTML/Css/Js</span>
              </div>
            </li>
          </ul>
        </div>
        
        <div class="col s12 l6">
          <img class="circle responsive-img animate__animated animate__pulse animate__infinite	infinite animate__slower auto img-autor" src="img/pp-remi.jpg" alt="image-remi" id="image1"/>
          <h2>Salles Rémi</h2>
          <p class="container">Je me présente Salles Rémi j'ai 18 ans, je suis en première année au sein de l'école Gaming Campus dans la section tech. Je viens d'arriver sur la ville de Lyon.</p>
          <ul class="container collapsible black-text">
            <li>
              <div class="collapsible-header">
                <i class="material-icons">fingerprint</i>Identitée
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Salles Rémi 18 ans, sors d'un baccalauréat technologique et viens d'intégrer l'école Gaming campus</span>
              </div>
            </li>
            <li>
              <div class="collapsible-header">
                <i class="material-icons">place</i>Localisation
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Née dans le sud à Arles, puis passant mes années de Lycée à aix en provence, j'ai déménagé à Lyon pour mes études.</span>
              </div>
            </li>
            <li>
              <div class="collapsible-header">
                <i class="material-icons">code</i>Code
              </div>
              <div class="collapsible-body">
                <span class="text-coll">Je viens de me lancer le code, mais je suis en train d'apprendre le HTML/ Css/ Js</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="parallax-container hoverable">
      <div class="parallax parallax2"><img src="img/paralax1.jpg" alt="image restaurant néon"></div>
      <div class="text-paralax center-align">
        <a href="projet-photo.html" class="waves-effect waves-light btn">Projet 2</a>
      </div>
    </div>
    
    <div class="section white test" id="skills">
      <h2 class="center-align">Nos compétences</h2>
      <div class="row container center-align">
        <div class="col s12 l4">
          <i class="medium material-icons">create</i>
          <h3>Artistique</h3>
          <p>Nous esseyons de rassembler toute notre énergie, notre sincérité et la plus grande modestie, pour briser les vieux clichés qui viennent si facilement à la main en travaillant. Alors nous développons notre propre style, en restant nous-mêmes, exprimant l’essence de notre être, quel que soit le travail à faire.</p>
        </div>
        <div class="col s12 l4">
          <i class="medium material-icons">flash_on</i>
          <h3>Professionelle</h3>
          <p>Pour rester professionnel, il faut être ponctuel, efficace, réactif, créatif, énergique, productif. On se contente par du minimum, il faut quelquefois savoir s'adapter aux horaires et au travail en restant un peu plus longtemps le soir si un projet important l'exige. Cela nous permet de garder la tete haute.</p>
        </div>
        <div class="col s12 l4">
          <i class="medium material-icons">straighten</i>
          <h3>Manuelle</h3>
          <p>Malgré une nette recrudescence des métiers orientés vers le digital et principalement l’informatique, pour exercer un métier digital, il est indispensable d’être habile de ses mains et de souhaiter mettre à profit ses capacités manuelles. Le travail digital demande une de l'imagination pour rester créatif</p>     
        </div>
      </div>
    </div>
    
    <div class="parallax-container hoverable">
      <div class="parallax parallax3"><img src="img/paralax1.jpg" alt="images restaurant néon"></div>
      <div class="text-paralax center-align">
        <a href="projet-siteweb.html" class="waves-effect waves-light btn">Projet 3</a>
      </div>
    </div>
    
    <?php 
    $page = "accueil";
    require "component/footer.php";
    ?>

    <script src="js/jquerry.min.js"></script> 
    <script src="js/materialize.js"></script> 
    <script src="js/script.js"></script>
    <script>
      <?php
    if(isset($_SESSION['erreur'])){
      echo 'M.toast({html: "'.$_SESSION['erreur'].'"})';
      unset($_SESSION['erreur']);
    } 
    ?>
    </script>
  </body>
</html>