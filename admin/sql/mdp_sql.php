<?php
session_start();

	 include "../../log_sql.php";
	$usr= $_SESSION['username'];
	
	$ps = $_POST['1'];
	$ps2 = $_POST['2'];
	if($ps != $ps2){
		header("LOCATION: ../passe.php?status=2");
		
	}
	else
	{
		
		$requete = "UPDATE users set password = '$ps' WHERE username = '$usr'";
         if ($db->query($requete) === TRUE) {
			header("LOCATION: ../passe.php?status=1");
		 }else {
			 header("LOCATION: ../passe.php");
		}
	}
	mysqli_close($db); // fermer la connexion

?>