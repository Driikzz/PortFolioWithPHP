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
    <header>
      <div class="row">
        <div class="col s12 grey darken-4" id="header-title">
          <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse"><i class="large material-icons">keyboard_arrow_right</i></a>
          <h1 class="white-text animate__animated animate__backInDown" id="Targget1">Portfolio</h1>
        </div>
      </div>
      <nav id="slide-out" class="sidenav">
        <ul>
          <li class="menu-deroulant">
            <div class="waves-effect"></div>
            <h2 class="center-align title-nav">Portfolio</h2>
            <a class="txt-nav black-text center-align" href='index.html'>Accueil</a> 
            <a class='txt-nav dropdown-trigger center-align' href='#' data-target="dropdown1">Projets +</a> 
            <a class="txt-nav center-align" href="#contact">Contact</a>
          </li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li>
            <a href="projet-culinaire.html">Culinaire</a>
          </li>
          <li>
            <a href="projet-photo.html">Photo</a>
          </li>
          <li>
            <a href="projet-siteweb.html">Site Web</a>
          </li>
        </ul> 
        <div class="switch center-align">
          <label>
            White
            <input id="tigger1" type="checkbox">
            <span class="lever"></span>
            Dark
          </label>
        </div>       
      </nav>
    </header>
    
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
    
    <footer class="page-footer" id="contact">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">A propos de nous</h5>
            <p class="grey-text text-lighten-4">Deux étudiants du Gaming Canpus au 50 rue de Marseille, ce site est notre portfolio, si vous voulez nous contacter, cliquez sur le bouton ci-dessous ! Enjoy</p>
            <a class="buton-footer waves-effect waves-light btn modal-trigger" href="#modal1">Fiche de contact</a>
            <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
                <div class="row contact">
                  <form class="col s12">
                    <div class="row">
                      <h2 class="center-align black-text">Contact</h2>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i> <input id="icon_prefix" type="text" class="validate"> <label for="icon_prefix">First Name</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i> <input id="icon_telephone" type="tel" class="validate"> <label for="icon_telephone">Telephone</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate"> <label for="email">Email</label>
                      </div>
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea> <label for="textarea1">Message</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" onclick="M.toast({html: 'Envoyer bg <br> tu me pais un verre la prochaine fois ?', completeCallback: function(){alert('Pas assez réactif, pour le verre, essaye plus tard !')}})" class=" modal-close waves-effect waves-green btn">Envoyer</a>
              </div>
            </div>
          </div>
          <div class="col l4 offset-l2 s12 carousel-text">
            <h4 class="white-text">Nos Projet en images</h4>
           <div class="carousel carousel-slider">
            <a class="carousel-item" href="projet-culinaire.html"><img src="img/projet1-img1.jpg" alt=".."></a> 
            <a class="carousel-item" href="projet-photo.html"><img src="img/projet2-img1.jpg" alt=".."></a> 
            <a class="carousel-item" href="projet-siteweb.html"><img src="img/projet3-img1.jpg" alt=".."></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <a href="">© 2022 Copyright</a>
        </div>
      </div>
    </footer>
    <script src="js/jquerry.min.js"></script> 
    <script src="js/materialize.js"></script> 
    <script src="js/script.js"></script>
  </body>
</html>