'<?php 
require_once "php/config.php"; 
$sql = "UPDATE users SET pseudo=:pseudo WHERE id=:id";
$dataBinded=array(
    ':pseudo'   => $_POST['pseudo'],
    ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:panelAdmin.php')
?>
