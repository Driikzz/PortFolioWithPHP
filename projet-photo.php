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
            <h2>Projet Photo</h2>
            </div>
        </div>
        
        <div class="row container container-project">
            <div class="col s12 m6 l6 right-align">
            <img class="z-depth-3" src="img/projet2-img1.jpg" alt="projet2-img1">
            <h3>Avancement</h3>
            <p>Le projet est en pause le temps de trouvrer le financement via des collecte de fond, mais l'issue nous permettra de voyager et de decuvrir un millieu qui ne'est pas denaturer par l'homme</p>
            </div>
            <div class="col s12 m6 l6">
            <h3>Mon projet</h3>
            <p>Mon projet est d'explorer l'Afrique afin de capturer de belle image des animeaux en millieu sauvage. Decouvrir des reserves proteger de l'homme et du braconage, comprendre pourquoi ces especes sont en danger d'extinction et pour finir de sensibiliser.</p><img class="z-depth-3" src="img/projet2-img2.png" alt="projet2-img2"></div>
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
                    Faire les Photos.
                    </div>
                    <div class="item-detail">
                    Les publiers
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Deuxième étapes
                    </div>
                    <div class="item-title">
                    Creer mon album photo
                    </div>
                    <div class="item-detail">
                    Les classer par ordre chronologique
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Troisème étapes
                    </div>
                    <div class="item-title">
                    Creer un documentaire
                    </div>
                    <div class="item-detail">
                    Photographier et filmer des images inedites
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Quatième étapes
                    </div>
                    <div class="item-title">
                    Sensibiliser le monde entier
                    </div>
                    <div class="item-detail">
                    montrer le declin de la biodiversite
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Cinquième étapes
                    </div>
                    <div class="item-title">
                    rentrer chez soi
                    </div>
                    <div class="item-detail">
                    avec de beaux souvenirs
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
        
        <div class="row container pres-book">
            <div class="col s12 l6 center-align"><img src="img/projet2-img3.png" alt="projet2-img3"></div>
            <div class="pres-book-texte col s12 l6">
            <h2>Mon album</h2>
            <h4>Résumé :</h4>
            <p>il sagit d'un album des photos qui seront prise dans un millieu sauvage et authentique a condition d'avoir le matériel photo de base pour réussir ses clichés animaliers se résume à un boitier, un objectif, un trépied et quelques accessoires. Mais beaucoup de techniques sont essentielles si vous débutez en photographiques animalières et souhaitez approfondir vos connaissances.</p>
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