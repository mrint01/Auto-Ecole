<?php
 session_start();
 include "../../log_sql.php";
    $ide = $_GET['id'];
	$_SESSION['r3'] = $ide;
    $requete = "select * from users where id= '$ide'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			
			
			$_SESSION['admin1'] = $row[1];
			$_SESSION['admin2'] = $row[3];
			$_SESSION['admin3'] = $row[4];
			$_SESSION['admin4'] = $row[6];
			$_SESSION['admin5'] = $row[7];
			$_SESSION['admin6'] = $row[8];
			$_SESSION['admin7'] = $row[9];
			
			
			
			
			}
		
	
		
		
	mysqli_close($db); // fermer la connexion
			
			header("LOCATION: ../affadmin.php");
			
			?>