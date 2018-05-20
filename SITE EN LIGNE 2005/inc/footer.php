 
<footer>
	   <p>Copyright 2018 
 
		  <?php
                    include ("bdd.php"); 
                    $req = $conn->query('SELECT nom, login FROM user WHERE id = 2');
	  
	            $donnees = $req -> fetch();
	  
                    echo $donnees['login'].' '.$donnees['nom'].'<br/>';

                    ?>
		  
		  - Toute reproduction interdite - <a href = "mentions.php">Mentions legales<a>
            </p>
</footer>
</body>


