<?php 
require_once "php/config.php";
$getId = $_GET['id'];
$recupProjects = $pdo->query('SELECT * FROM projects WHERE id = '.$getId);
$projets = $recupProjects->fetch() ;
?>



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
            <h2><?php echo $projets['first_title_project']; ?></h2>
            </div>
        </div>
        
        <div class="row container container-project">
            <div class="col s12 m6 l6 right-align">
            <img class="z-depth-3" src="<?php echo $projets['images_one']; ?>" alt="projet2-img1">
            <h3><?php echo $projets['title_one']; ?></h3>
            <p><?php echo $projets['paragraphe_one']; ?></p>
            </div>
            <div class="col s12 m6 l6">
            <h3><?php echo $projets['title_two']; ?></h3>
            <p><?php echo $projets['paragraphe_two']; ?></p>
            <img class="z-depth-3" src="<?php echo $projets['images_two']; ?>" alt="projet2-img2"></div>
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
                    ..................................
                    <?php echo $projets['title_one_timeline']; ?>
                    </div>
                    <div class="item-detail">
                    <?php echo $projets['title_one_timeline']; ?>
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Deuxième étapes
                    </div>
                    <div class="item-title">
                
                    <?php echo $projets['title_two_timeline']; ?>
                    </div>
                    <div class="item-detail">
                        
                    <?php echo $projets['title_two_timeline']; ?>
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Troisème étapes
                    </div>
                    <div class="item-title">
                    <?php echo $projets['title_three_timeline']; ?>
                    </div>
                    <div class="item-detail">
                    <?php echo $projets['title_three_timeline']; ?>
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Quatième étapes
                    </div>
                    <div class="item-title">
                    <?php echo $projets['title_for_timeline']; ?>
                    </div>
                    <div class="item-detail">
                    <?php echo $projets['title_for_timeline']; ?>
                    </div>
                </li>
                <li class="tl-item">
                    <div class="timestamp">
                    Cinquième étapes
                    </div>
                    <div class="item-title">
                    <?php echo $projets['title_five_timeline']; ?>
                    </div>
                    <div class="item-detail">
                    <?php echo $projets['title_five_timeline']; ?>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
        
        <div class="row container pres-book">
            <div class="col s12 l6 center-align"><img src="<?php echo $projets['images_resume']; ?>" alt="projet2-img3"></div>
            <div class="pres-book-texte col s12 l6">
            <h2><?php echo $projets['title_resume']; ?></h2>
            <h4>Résumé :</h4>
            <p><?php echo $projets['paragraphe_resume']; ?></p>
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