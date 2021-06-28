<?php
$us = $_SESSION['username'];
 include "../log_sql.php";
    
    $requete = "select * from history where id_user= '$us'";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['score'] . "</td><td>".$row['date']."</td>" ;
		   ?>
		<td><a href="./sql/delhis_sql.php?id=<?php echo $row[0]; ?>"><button class='button4' >Delete</button></a></td><?php "</tr>";  
			

		}
		echo "</table>";
		
	
		
		
	mysqli_close($db); // fermer la connexion

?>