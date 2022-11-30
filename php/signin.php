<?php 
require_once "config.php"; 
$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$users = $pre->fetch(PDO::FETCH_ASSOC);

if(empty($users)){ //vérifie si le resultat est vide !
     $_SESSION['erreur'] = 'Mot de passe ou email invalide';                                                          
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

    
header('Location:../index.php?');
?>