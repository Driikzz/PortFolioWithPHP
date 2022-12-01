<?php
session_start();
$pdo = new PDO(
    'mysql:host=localhost;dbname=portfoliogrpb12V;',
    'root',
    'root',
<<<<<<< HEAD
    'root',
=======
>>>>>>> fee630a32b488e4e4648ae889134d76364979b23
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>