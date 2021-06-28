<?php

 
  include "../log_sql.php";
  
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
    $requete = "select * from livre ";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>" . $row['id'] . "</td><td><a href='".$actual_link."/../uploads/" . $row['url'] . "' target='_blank'><img id='img03' src='./img/pdf.png'></a></td><td>".$row['p_g']."</td><td>".$row['prix']."</td><td>".$row['paye']."</td>";
			?>
			<td>
			
			<a href="./modifcode.php?id=<?php echo $row[0]; ?>"><button  class='button' >Modifier</button></a>
			<?php "</tr>";  
			

		}
		echo "</table>";
	
		
		
	mysqli_close($db); // fermer la connexion

?>