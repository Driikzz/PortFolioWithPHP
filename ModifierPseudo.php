<?php 
require_once "php/config.php"; 
$sql = "UPDATE user('pseudo') VALUES(:pseudo)";
$dataBinded=array(
    ':pseudo'   => $_POST['pseudo'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: panelAdmin.php');//on le redirige sur la page d'accueil du site !
?>
?>
