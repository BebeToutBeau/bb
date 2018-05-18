<?php


$serveur='localhost'; 
$loginserveur='root';
$mdpserveur=''; 
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';

$conn = new PDO('mysql:host=localhost;dbname=bddbebetoutbeau','root', '', $pdo_options);

$req = $conn->query('SELECT * FROM user WHERE id = 2');
	  
	  $donnees = $req -> fetch();
	  
echo $donnees['login'].':'.$donnees['nom'].'<br/>';

?>

