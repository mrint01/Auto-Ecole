<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];

	
	
    include "../../log_sql.php";
    
    $requete = "select id,username,password,type from users where username = '$user' and password = '$pass'";
        $exec_requete = mysqli_query($db,$requete);
       $row = mysqli_fetch_array($exec_requete);
	   if($row != 0){
		  if($row['type'] == "admin"){
			  header("LOCATION: ../../admin");
		  }elseif($row['type'] == "moniteur"){
			  header("LOCATION: ../../moniteur");
			  
		  }else{
			  header("LOCATION: ../../user");
		  }
	   }else {header("LOCATION: ../");}
		
	mysqli_close($db); // fermer la connexion		
}
else
{
	header("LOCATION: ../");
}

?>