<?php 
require_once "config.php"; 
$sql = "INSERT INTO users(pseudo,email,country,password) VALUES(:pseudo,:email,:country,:password)";

$dataBinded=array(
    ':pseudo'=> $_POST['pseudo'],
    ':email' => $_POST['email'],
    ':country'=> $_POST['country'],
    ':password'=> $_POST['password']
    
);

foreach($_POST as $key => $info){
    if(empty($info)){
        $_SESSION['erreur'] = 'Erreur, formulaire non remplie';
        header('Location:../index.php');//on le redirige sur la page d'accueil du site ! 
        exit();
    }
}

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>