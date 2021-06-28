<?php
session_start();
include "../log_sql.php";
    

            if (isset($_POST['Confirmer'])){
            $us=$_SESSION['username'];
            $heure_obs = $_POST['heure_obs'];
            $heure_cond = $_POST['heure_cond']; 
            $code_route = $_POST['code_route'];
            $prix_promo = $_POST['prix_promo'];
        
       
      


        $sql ="INSERT INTO promos(id_user,heure_obs,heure_cond,code_route,prix) VALUES('$us','$heure_obs','$heure_cond','$code_route','$prix_promo')";
        if($db->query($sql)==TRUE){
            header("LOCATION: ../votre_promo.php");
        }else{
            echo "erreur";
        }
            
// Display status message

		
	mysqli_close($db); // fermer la connexion
					
		}	
?>