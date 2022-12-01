&<?php
// Vérifier si le formulaire est soumis 
if ( isset( $_GET['submit'] ) ) {
/* récupérer les données du formulaire en utilisant 
la valeur des attributs name comme clé 
*/
$first_name = $_GET['first_name']; 
$phone = $_GET['phone']; 
$email = $_GET['email'];
$message = $_GET['message'];
exit;
}


$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');

if(mail($first_name,$email,$message,$headers)){
    //le mail est bien parti ! Pas d'erreur
}else{
    //on a une erreur quelque part
}
?>


