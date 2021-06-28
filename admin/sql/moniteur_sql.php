<?php
 include "../log_sql.php";
    $requete = "select * from users where type= 'moniteur'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>".$row['full_name']."</td><td>".$row['email']."</td>";
			?>
			<td><a href="./sql/moniteuraff_sql.php?id=<?php echo $row[0]; ?>"><button class='button4' >Afficher</button></a></td><?php "</tr>";  
			

		}
		echo "</table>";
	
		
		
	mysqli_close($db); // fermer la connexion

?>