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
    if(!isset($_SESSION['users'])){
        header('Location:index.php');
    }
    if(isset($_SESSION['users'])){
      if ($_SESSION["users"]["admin"]== 0){
        header('Location:index.php');
      }
  }   
  ?> 
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
            <a class="modal-trigger" href="#modal4">Crée un nouveau projet</a>
            <h3>Listes de projets : </h3>
            <?php
            $sqlProject = "SELECT id,first_title_project FROM projects"; 
            $pre = $pdo->prepare($sqlProject); 
            $pre->execute();
            $idProject = $pre->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php
            foreach($idProject as $key => $pro){ ?>
            <p>
              <a href="projetsTest.php?id=<?php echo $pro['id'] ?>"><?php echo $pro['first_title_project'] ?></a><a class="material-icons" href="php/deleteProject.php?id=<?= $pro['id']; ?>">delete_forever</a>
            </p>
          <?php } ?>
            <div id="modal4" class="modal modaltest modal-fixed-footer">
                  <div class="modal-content">
                    <div class="row contact">
                      <form class="col s12" method="post" enctype="multipart/form-data" action="php/editProject.php">
                      <div class="row">
                        <h2 class="center-align black-text">Nouveau projet</h2>
                        titre Principal<input type="text" name="first_title_project" >
                        titre 1<input type="text" name="title_one" >
                        titre 2<input type="text" name="title_two">
                        <br>
                        paragraphe 1<textarea  name="paragraphe_one" id="" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        paragraphe 2<textarea  name="paragraphe_two" id="" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        image 1<input type="file" name="images_one">
                        <br>
                        <br>
                        
                        image 2<input type="file" name="images_two">
                        <br>
                        <br>
                        <p>TimeLine</p>
                        <br>
                        <br>
                        titre timeline 1<input type="text" name="title_one_timeline" >
                        titre timeline 2<input type="text" name="title_two_timeline">
                        titre timeline 3<input type="text" name="title_three_timeline" >
                        titre timeline 4<input type="text" name="title_for_timeline">
                        titre timeline 5<input type="text" name="title_five_timeline" >
                        <br>
                        <br>
                        <p>Résumé</p>
                        <br>
                        <br>
                        titre résumé <input type="text" name="title_resume" >
                        <br>
                        <br>
                        paragraphe résumé<textarea  name="paragraphe_resume" id="" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        image 3 résumé<input type="file" name="images_resume">
                        <br>
                        <br>
                        <input class="waves-effect waves-green grey lighten-2 btn" type='submit' name="envoie" value='Valider'/>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
        </div>

       

        <div class="col s12 l6">

            <h2>Liste des inscrits</h2>
            <p><?php echo 'ID'." | ".'Pseudo'." | ".'Email'." | ".'country'." | ".'admin'?></p>
            <?php
            $recupUsers = $pdo->query('SELECT * FROM users');

            while($users = $recupUsers->fetch()){
                ?>
                <p><?= $users['id']." ".$users['pseudo']." ".$users['email']." ".$users['country']." ".$users['admin']; ?><a class="material-icons" href="php/deleteUsers.php?id=<?= $users['id']; ?>">delete_forever</a><a class="material-icons" href="ModifierAdmin.php?id=<?= $users['id']; ?>">key</a><a class="large material-icons" href="RoleUsers.php?id=<?= $users['id']; ?>">lock</a>
                <form method="post" action="ModifierPseudo.php">
                  <input type="hidden" name="id" value="<?php echo $users['id'] ?>">
                  <input type='texte' name='pseudo' />
                  <input type='submit' value='Modifier'/>
                </form>
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


