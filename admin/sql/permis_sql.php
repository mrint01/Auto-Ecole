<?php
 include "../log_sql.php";
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
    $requete = "select * from img ";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>" . $row['id'] . "</td><td><a href='".$actual_link."/../images_permis/" . $row['url_img'] . "' target='_blank'><img id='img03' src='".$actual_link."/../images_permis/" . $row['url_img'] . "'></a></td>";
			?>
			<td>
			
			<a href="./modifpermis.php?id=<?php echo $row[0]; ?>"><button class='button' >Modifier</button></a>
			<a href="./sql/delpermis_sql.php?id=<?php echo $row[0]; ?>"><button class='button2' >Supprimer</button></a></td>
			<?php "</tr>";  
			

		}
		echo "</table>";
	
		 ?><br/><br/><center><a href="./ajoutpermis.php"><button style="width:300px;" class='button4' >Ajouter</button></a></center><br/><?php
		
	mysqli_close($db); // fermer la connexion


?>