<?php

  include "../log_sql.php";
    $id = $_GET['id'];
	$_SESSION['idop'] = $id;
    $requete = "select * from livre where id= '$id'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			
			
			$_SESSION['ur'] = $row[1];
			$_SESSION['pp'] = $row[2];
			$_SESSION['pe'] = $row[3];
			$_SESSION['pi'] = $row[4];
			
			
			}
	mysqli_close($db); // fermer la connexion
			
			
			
			?>