<?php

require_once "config.php";

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupProjects = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
    $recupProjects->execute(array($getid));
    if($recupProjects->rowCount() > 0){
        $suppProjects = $pdo->prepare('DELETE FROM projects WHERE id = ?');

        $suppProjects->execute(array($getid));
        header('Location: ../panelAdmin.php');
    }else{
        echo "Aucun utilisateur a étét trouver";
    }
}else{
    echo "l'identifiant n'a pas été récupéré";
}
?>