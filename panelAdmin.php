<?php require_once "php/config.php"; ?>

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

        <h2>Espace de connexion admin</h2>

      </div>

    </div>

   

    <div class="section white black-text test">

      <div class="row center-align">

        <div class="col s12 l6" id="p-container-title">

            <h2>Gestions des projets </h2>

        </div>

       

        <div class="col s12 l6">

            <h2>Liste des inscrits</h2>

            <p><?php echo 'ID'." | ".'Pseudo'." | ".'Email'." | ".'Password'." | ".'Country'?></p>

            <?php

            $recupUsers = $pdo->query('SELECT * FROM users');

            while($users = $recupUsers->fetch()){

                ?>

                <p><?= $users['id']." ".$users['pseudo']." ".$users['email']." ".$users['password']." ".$users['country']; ?><a class="material-icons" href="php/deleteUsers.php?id=<?= $users['id']; ?>">delete_forever</a></p>

                <?php

            }

        ?>

   

        </div>

      </div>

    </div>

 

    <script src="js/jquerry.min.js"></script>

    <script src="js/materialize.js"></script>

    <script src="js/script.js"></script>

  </body>

</html>