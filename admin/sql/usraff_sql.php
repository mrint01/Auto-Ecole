<?php
 session_start();
 include "../../log_sql.php";
    $id = $_GET['id'];
	$_SESSION['r1'] = $id;
    $requete = "select * from users where id= '$id'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			
			
			$_SESSION['uss'] = $row[1];
			$_SESSION['nomm'] = $row[3];
			$_SESSION['dobb'] = $row[4];
			$_SESSION['rgg'] = $row[6];
			$_SESSION['emm'] = $row[7];
			$_SESSION['numm'] = $row[8];
			$_SESSION['ggg'] = $row[9];
			
			
			
			
			}
		
	
		
	mysqli_close($db); // fermer la connexion
			
	header("LOCATION: ../affuser.php");

			
			?>