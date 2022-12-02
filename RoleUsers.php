<?php

require_once "php/config.php";

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $getid = $_GET['id'];

    $recupUser = $pdo->prepare('SELECT * FROM users WHERE id = ?');

    $recupUser->execute(array($getid));

    if($recupUser->rowCount() > 0){

 

        $promoteUser = $pdo->prepare('UPDATE users SET admin = 0 WHERE id = ?');

        $promoteUser->execute(array($getid));

       

        header('Location: panelAdmin.php');

       

    }else{

        echo "Aucun utilisateur a étét trouver";

    }

}else{

    echo "l'identifiant n'a pas été récupéré";

}

?>