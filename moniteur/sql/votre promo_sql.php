<?php
include "../log_sql.php";	
$usu = $_SESSION['username'];


    $requete = "select * from promos where id_user = '$usu'";
	$result = mysqli_query($db,$requete);
	
while($row = mysqli_fetch_array($result)){
			echo  "<tr><td>" . $row['heure_obs'] . "</td><td>".$row['heure_cond']. "</td><td>" . $row['code_route'].
			"</td><td>" . $row['prix']."</td>";
			?>
			<td>
			
			<a href="./modifierpromo.php?id=<?php echo $row['id']; ?>"><button class='button' >Modifier</button></a>
			<a href="./sql/supprimerpromo_sql.php?id=<?php echo $row['id']; ?>"><button class='button2' >Supprimer</button></a></td>
			<?php "</tr>";  
			

		}
		echo "</table>";
	
		 ?><br/><br/><center><a href="./ajouterpromo.php"><button style="width:200px;" class='button4' >Ajouter un promo</button></a></center><br/><?php
		
	mysqli_close($db); // fermer la connexion


?>