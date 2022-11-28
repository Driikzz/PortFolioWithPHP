<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Portfolio</title>
    <meta name="description" content="Ceci est notre portfolio, pour exposer notres travail, au monde entier !">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
  </head>
  <body class="test">
    
  <?php 
    $page = "accueil";
    require "component/menu.php";
    ?>
    
    <div class="row container">
      <div class="col s12 center-align projet-title">
        <h2>Projet Site-Web</h2>
      </div>
    </div>
    <div class="row container container-project">
      <div class="col s12 m6 l6 right-align">
        <img class="z-depth-3" src="img/projet3-img1.jpg" alt="projet3-img1">
        <h3>La finalité</h3>
        <p>Grâce à ce projet j'ai pu apprendre à faire des sites internet plus propres et ainsi m'améliorer, l'expérience était en binôme ce qui était pour moi quelque chose de nouveau.</p>
      </div>
      <div class="col s12 m6 l6">
      <h3>Mon projet</h3>
      <p>Le projet était de créer un site internet sur les jeux vidéo qu'on voulait j'ai donc choisi de prendre le Rainbow Six Siège car c'est un jeu que j'aime bien et auquel je joue quasiment tous les jours.</p><img class="z-depth-3" src="img/projet3-img2.jpg" alt="projet3-img2"></div>
    </div>
    
    <div class="row timeline">
      <div class="col s12 center-align history-container">
        <h2>Timeline</h2>
        <div class="history-tl-container">
          <ul class="tl">
            <li class="tl-item">
              <div class="timestamp">
                Jour 1
              </div>
              <div class="item-title">
                Revoir les base HTML/CSS.
              </div>
              <div class="item-detail">
                Pourvoir appliqué et commencer le html du site.
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Jour 2
              </div>
              <div class="item-title">
                Appliquer le cour sur le CSS.
              </div>
              <div class="item-detail">
                Mettre en page le site avec le Css.
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Jour 3
              </div>
              <div class="item-title">
                Améliorer le site
              </div>
              <div class="item-detail">
                Continuer avec le Css pour avoir un rendu propre
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Jour 4
              </div>
              <div class="item-title">
                Corriger les erreurs
              </div>
              <div class="item-detail">
                Bien faire attention d'avoir zéro erreurs grâce au site HTML validator.
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Jour 5
              </div>
              <div class="item-title">
                Présentation
              </div>
              <div class="item-detail">
                Jour de soutenence et résultat du projet.
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row container pres-book">
      <div class="col s12 l6 center-align"><img class="z-depth-5" src="img/projet3-img3.jpg" alt="projet3-img3"></div>
      <div class="pres-book-texte col s12 l6">
        <h2>Mon site web</h2>
        <h4>Résumé :</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, modi! Quasi reiciendis facilis, aspernatur quam repellat fugit explicabo vitae nisi libero, doloribus architecto iure harum, magnam aliquid voluptatum repudiandae nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione esse aspernatur hic maiores ab id blanditiis alias, ipsam necessitatibus repellat nesciunt aperiam nam nobis? Ullam voluptatum molestias sunt reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nulla, delectus voluptates excepturi inventore nemo. Nobis, qui enim eum consectetur rerum nulla hic adipisci maxime quidem tempore tempora assumenda porro!</p><a class="waves-effect waves-light btn" href="Projet%201%20R6%20v5/index.html" target="_blank">Lien vers le site</a>
      </div>
    </div>
    
    <?php 
    $page = "accueil";
    require "component/footer.php";
    ?>
    
    <script src="js/jquerry.min.js"></script> 
    <script src="js/materialize.js"></script> 
    <script src="js/script.js"></script>
  </body>
</html>