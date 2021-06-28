<?php
session_start();
// Create connection to BD
include "../../log_sql.php";
$ps = $_POST['psw1'];
$ps1 = $_POST['psw2'];
if($ps == $ps1){
	
	
$dd = $_POST['jour'];
$mm = $_POST['mois'];
$aa = $_POST['annee'];
$date = $dd."-".$mm."-".$aa;


// if the register button is clicked
	if (isset($_POST['envoyer'])){
		$nom = $_POST['nom'];
		$username = $_POST['username'];
		$dd = $_POST['jour'];
        $mm = $_POST['mois'];
		$aa = $_POST['annee'];
		$date = $dd."-".$mm."-".$aa;
	    $genre = $_POST['souhait'];
	    $region = $_POST['region'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
		$password = $_POST['psw1'];
	   
	  


		$sql ="INSERT INTO users VALUES('null','$username','$password','$nom','$date','$genre','$region','$email','$numero','user')";
		if($db->query($sql)==TRUE){
			header("LOCATION: ../../login");
		}else{
			header("LOCATION: ../");
		}




	}

}
	else{
		header("LOCATION: ../index.php");
		
	}

?>