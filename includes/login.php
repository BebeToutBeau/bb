<?php

include 'bdd.php';

$nom=$_POST["nom"];
$login=$_POST["login"];
$password=$_POST["password"];

$sql="SELECT * FROM user WHERE nom='$nom' AND login='$login' AND password='$password';";
$result= mysqli_query($conn,$sql);
		
if(!$row=mysqli_fetch_assoc($result))
				{echo "Votre nom ou login ou password est incorrect!";}
else{echo "Vous êtes connecté";};
	
?>