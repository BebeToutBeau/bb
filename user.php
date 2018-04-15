<?php 
include_once'includes/bdd.php';
?>

<?php 
		include('includes/header.php')
?>

		<form action="includes/login.php" method="POST"> 
			<input type="text" name="nom" placeholder="nom">
			<br>
			<input type="text" name="login" placeholder="login">
			<br>
			<input type="password" name="password" placeholder="password">
			<br>
			<button type="submit" name="submit">Valider</button>
		<form>

<?php 
		include('includes/footer.php');

?>