<?php 
require_once "config.php"; 
$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$users = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($users)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['users'] = $users; //on enregistre que l'utilisateur est connecté
}

header('Location:../test.php');//on le redirige sur la page d'accueil du site !
?>