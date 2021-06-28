<?php
session_start();

 include "../../log_sql.php";
	$usr= $_SESSION['username'];
	
	$us = $_POST['1'];
	$nm = $_POST['2'];
	$dob = $_POST['3'];
	$rg = $_POST['4'];
	$em = $_POST['5'];
	$num = $_POST['6'];
	
	
		$requete = "UPDATE users set username = '$us',
						 full_name = '$nm',
						 dob = '$dob',
						 region = '$rg',
						 email = '$em',
						 phone_number = '$num'
						WHERE username = '$usr'";
         if ($db->query($requete) === TRUE) {
			header("LOCATION: ../profil.php?status=1");
		 }else {
			 header("LOCATION: ../modif_profil.php");
		}
		/****************************************/
		
		
	mysqli_close($db); // fermer la connexion

?>