<?php 
require_once "config.php"; 
$sql = "INSERT INTO users(pseudo,email,country,password) VALUES(:pseudo,:email,:country,:password)";
$dataBinded=array(
    ':pseudo'=> $_POST['pseudo'],
    ':email' => $_POST['email'],
    ':country'=> $_POST['country'],
    ':password'=> $_POST['password']
    
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>