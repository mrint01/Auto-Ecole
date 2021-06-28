<?php
	$type1="user";
	$type2="admin";
	$type3="moniteur";
	$pay="Payant";
	
	 include "../log_sql.php";
    
    $requete = "select count(*) from users where type = '$type1'";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['typeuser'] =  $row[0];
		}
		else{
			echo "err";
		}
		/****************************************/
		$requete = "select count(*) from users where type = '$type2'";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['typeadmin'] =  $row[0];
		}
		else{
			echo "err";
		}
		/****************************************/
		$requete = "select count(*) from users where type = '$type3'";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['typemoniteur'] =  $row[0];
		}
		else{
			echo "err";
		}
		/****************************************/
		$requete = "select count(*) from history";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['history'] =  $row[0];
		}
		else{
			echo "err";
		}
		/****************************************/
		$requete = "select count(*) from promos";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['promos'] =  $row[0];
		}
		else{
			echo "err";
		}
		/****************************************/
		$requete = "select paye from livre where p_g = '$pay'";
        $exec_requete = mysqli_query($db,$requete);
        $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		$_SESSION['livre'] =  $row[0];

		}
		else{
			echo "err";
		}
		
		
	mysqli_close($db); // fermer la connexion
	

?>