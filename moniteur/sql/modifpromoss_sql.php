<?php
session_start();
	// Create connection to BD
   include "../log_sql.php";
    //$usr= $_SESSION['username'];
	
   $id1 = $_SESSION['id1'];
   $heur = $_POST['heure_obss'];
   $cond = $_POST['heure_cond'];
   $route = $_POST['code_route'];
   $prix = $_POST['prix_promo'];

 
$requete="update promos set heure_obs = '$heur', heure_cond = '$cond', code_route = '$route', prix = '$prix' where id = '$id1'";
	if($db->query($requete) == TRUE)
	{
		header("LOCATION: ../votre_promo.php");

	}
	else{
		echo "errrrrrrrr";
		//header("LOCATION: ../modifierpromo.php");
	}


	
//mysqli_close($db);		
   
  
	

?>