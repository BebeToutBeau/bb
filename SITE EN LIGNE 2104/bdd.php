<?php

$conn=mysqli_connect("sql111.epizy.com", "epiz_21950671","PeJ0w8LdRHCj", "epiz_21950671_bebetoutbeau");
if(!$conn){
	die("Echec de connexion".mysqli_connect_error());
}

?>


<?php


$serveur='sql111.epizy.com'; 
$loginserveur='epiz_21950671';
$mdpserveur='PeJ0w8LdRHCj'; 
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';

$conn = new PDO('mysql:host=$serveur;dbname=epiz_21950671_bebetoutbeau',$loginserveur, $mdpserveur, $pdo_options);


?>