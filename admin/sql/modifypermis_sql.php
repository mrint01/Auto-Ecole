<?php

  include "../log_sql.php";
    $id = $_GET['id'];
	$_SESSION['iddd'] = $id;
    $requete = "select * from liv_cours where id= '$id'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			
			
			$_SESSION['url'] = $row[1];
			$_SESSION['tt'] = $row[2];
			
			
			
			
			}
		
	
		
		
	mysqli_close($db); // fermer la connexion
			
			
			
			?>