<?php 
include_once'includes/bdd.php';
?>

<?php 
		include('includes/header.php')
?>
	  <article>
		<h1> Echarpe de portage </h1>
		<p>
			<?php
				$sql = "SELECT `contenu` FROM `content` WHERE titre='Echarpe';";
				$result= mysqli_query($conn,$sql);
		
				if($result) 
					{while ($row=mysqli_fetch_assoc($result))
						{echo $row['contenu']."<br>";
					}
						}
			?>	   
		</p>	  
	  </article>
<?php 
		include('includes/footer.php');

?>