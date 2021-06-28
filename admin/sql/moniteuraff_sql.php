<?php
 session_start();
 include "../../log_sql.php";
    $id = $_GET['id'];
	$_SESSION['r2'] = $id;
    $requete = "select * from users where id= '$id'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			
			
			$_SESSION['mont1'] = $row[1];
			$_SESSION['mont2'] = $row[3];
			$_SESSION['mont3'] = $row[4];
			$_SESSION['mont4'] = $row[6];
			$_SESSION['mont5'] = $row[7];
			$_SESSION['mont6'] = $row[8];
			$_SESSION['mont7'] = $row[9];
			
			
			
			
			}
		
	
		
		
	mysqli_close($db); // fermer la connexion
	
			header("LOCATION: ../affmoniteur.php");
			
			
			?>