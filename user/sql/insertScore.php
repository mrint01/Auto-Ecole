<?php 
session_start();
include "../../log_sql.php";
 $score = $_GET['id']."/10";
 $_SESSION['score'] = $score;
 $us = $_SESSION['username'];
 $date = date("Y-m-d");
 
 
    $requete = "insert into history values(null,'$us','$score','$date')";
	$result = mysqli_query($db,$requete);
	
	header("LOCATION: ../testcode.php?status=1");
		
	mysqli_close($db); // fermer la connexion
			
			
			
			?>
 




?>