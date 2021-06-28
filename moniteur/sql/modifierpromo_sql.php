<?php
	include "../log_sql.php";
    $usr= $_SESSION['username'];
    $id = $_GET['id'];
    $_SESSION['id1'] = $id;


$requete="select * from promos where id = '$id'";
	$exec = mysqli_query($db,$requete);
	$row = mysqli_fetch_array($exec);
	if($row != 0){
    	$_SESSION['heure_obs'] = $row[2];
		$_SESSION['heure_cond'] = $row[3];
		$_SESSION['code_route'] = $row[4];
	    $_SESSION['prix_promo'] = $row[5];
	}
	else{
		echo "err";
	}
//mysqli_close($db);		
   
  
	

?>