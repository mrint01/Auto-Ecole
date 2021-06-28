<?php

	 include "../../log_sql.php";
	
	$url = $_POST['1'];
	$tp = $_POST['2'];
	$te = $_POST['3'];
	$ts = $_POST['4'];
     $requete = "insert into liv_cours(url,p_g,prix,paye)values('$url','$tp','$te','$ts')";
	$result = mysqli_query($db,$requete);
	
		header("LOCATION: ../code.php?status=3");
		
	mysqli_close($db); // fermer la connexion
			
			
			
			?>