<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Portfolio</title>
    <meta charset="utf-8">
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
        <h2>Projet Culinaire</h2>
      </div>
    </div>

    <div class="row container container-project">
      <div class="col s12 m6 l6 right-align">
        <img class="z-depth-3" src="img/projet1-img1.jpg" alt="projet1-img1">
        <h3>Avancement</h3>
        <p>À l'heure actuelle mon projet avance fortement, j'ai la plupart des recettes qui sont prêtes et il me manque plus que l'illustration ludique pour les familles et pour que le livre dégage une bonne ambiance.</p>
      </div>
      <div class="col s12 m6 l6">
      <h3>Mon projet</h3>
      <p>Mon projet consisté à créer une sorte de livre de recettes pour faire des ateliers culinaires et ainsi faire des plats qui paraissent difficiles en quelques minutes avec la liste des ingrédients.</p><img class="z-depth-3" src="img/projet1-img2.jpg" alt="projet1-img2"></div>
    </div>
    
    <div class="row timeline">
      <div class="col s12 center-align history-container">
        <h2>Timeline</h2>
        <div class="history-tl-container">
          <ul class="tl">
            <li class="tl-item">
              <div class="timestamp">
                Première étapes
              </div>
              <div class="item-title">
                Faire les recettes.
              </div>
              <div class="item-detail">
                Faire valider les recettes.
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Deuxième étapes
              </div>
              <div class="item-title">
                Commencer à écrire le livre.
              </div>
              <div class="item-detail">
                Et rédiger les recettes de façon facile et sans technique préalable
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Troisème étapes
              </div>
              <div class="item-title">
                Faire les design du livres
              </div>
              <div class="item-detail">
                Faire des designs constructif et intéressant pour tous
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Quatième étapes
              </div>
              <div class="item-title">
                Validée mon livre.
              </div>
              <div class="item-detail">
                Commencé la fabrication du livre.
              </div>
            </li>
            <li class="tl-item">
              <div class="timestamp">
                Cinquième étapes
              </div>
              <div class="item-title">
                Commercialisé le livre
              </div>
              <div class="item-detail">
                Et essayé de le vendre le plus possile :)
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row container pres-book">
      <div class="col s12 l6 center-align"><img src="img/livre-cuisine.png" alt="livre-cuisine"></div>
      <div class="pres-book-texte col s12 l6">
        <h2>Prototype de mon livre</h2>
        <h4>Résumé :</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, modi! Quasi reiciendis facilis, aspernatur quam repellat fugit explicabo vitae nisi libero, doloribus architecto iure harum, magnam aliquid voluptatum repudiandae nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione esse aspernatur hic maiores ab id blanditiis alias, ipsam necessitatibus repellat nesciunt aperiam nam nobis? Ullam voluptatum molestias sunt reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nulla, delectus voluptates excepturi inventore nemo. Nobis, qui enim eum consectetur rerum nulla hic adipisci maxime quidem tempore tempora assumenda porro!</p>
      </div>
    </div>
    
    <?php 
    $page = "projet";
    require "component/footer.php";
    ?>
    
    
    <script src="js/jquerry.min.js"></script> 
    <script src="js/materialize.js"></script> 
    <script src="js/script.js"></script>
  </body>
</html>