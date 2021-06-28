<?php
	 include "../../log_sql.php";
	
	$nm = $_POST['nom'];
	$pws = $_POST['pws'];
	$np = $_POST['np'];
	$dob = $_POST['dob'];
	$gnr = $_POST['gnr'];
	$rg = $_POST['rg'];
	$em = $_POST['em'];
	$num = $_POST['num'];
	$type = $_POST['type'];
    $requete = "insert into users values(null,'$nm','$pws','$np','$dob','$gnr','$rg','$em','$num','$type')";
	$result = mysqli_query($db,$requete);
	
		header("LOCATION: ../user.php?status=2");
		
	mysqli_close($db); // fermer la connexion
			
			
			
			?>