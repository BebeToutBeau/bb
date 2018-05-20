<?php

include 'bdd.php';
include 'header.php';

$nom=$_POST["nom"];
$login=$_POST["login"];
$password=$_POST["password"];

$sql="SELECT * FROM user WHERE nom='$nom' AND login='$login' AND password='$password';";
$result= mysqli_query($conn,$sql);
		
if(!$row=mysqli_fetch_assoc($result))
				{echo "Votre nom ou login ou password est incorrect! </br></br></br>";}
else{echo "Vous êtes connecté </br></br></br>";};


include 'footer.php';
	
?>