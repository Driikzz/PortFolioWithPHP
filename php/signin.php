<?php 
require_once "config.php"; 
$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$users = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($users)){ //vérifie si le resultat est vide !
     //non connecté
     echo 'erreur';
}else{
     $_SESSION['users'] = [
          "id" => $users["id"],
          "pseudo"=> $users["pseudo"],
          "email" => $users["email"],
          "country" => $users["country"],
          "password" => $users["password"],
          "admin" => $users["admin"]
     ]; //on enregistre que l'utilisateur est connecté

}
header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>