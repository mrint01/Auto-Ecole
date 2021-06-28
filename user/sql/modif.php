<?php
session_start();
include "../../log_sql.php";
    	$us = $_SESSION['username'];
    	$nom = $_POST['nom'];
		$username = $_POST['user'];
		
		$date = $_POST['date'];
	    $region = $_POST['region'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];


		if($_POST['password'] == "")
			{
				$sql = "update users set username = '$username' , full_name = '$nom' , dob = '$date' , region = '$region' ,  email = '$email' , phone_number = '$numero' where username = '$us'";
		if($db->query($sql)==TRUE){
			header("LOCATION: ../profilUser.php");
		}else{
			header("LOCATION: ../modif.php");
		}

			}
			else {
				$password = $_POST['password'];
				$sql = "update users set username = '$username' , password = '$password' , full_name = '$nom' , dob = '$date' , region = '$region' ,  email = '$email' , phone_number = '$numero' where username = '$us'";
		if($db->query($sql)==TRUE){
			header("LOCATION: ../profilUser.php");
		}else{
			echo "err";
		}
				}			