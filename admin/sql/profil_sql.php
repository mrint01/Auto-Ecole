<?php

 include "../log_sql.php";
    $usr = $_SESSION['username'];
    $requete = "select * from users where username = '$usr'";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
		if($row !=0)
		{
		
		$_SESSION['name'] = $row[3];
		$_SESSION['dob'] =  $row[4];
		$_SESSION['region'] =  $row[6];
		$_SESSION['email'] =  $row[7];
		$_SESSION['phone'] =  $row[8];
		}
		else{
			echo "err";
		}
		/****************************************/
		
		
	mysqli_close($db); // fermer la connexion

?>