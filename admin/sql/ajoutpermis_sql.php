<?php

	$ty = $_POST['2'];
    include "../../log_sql.php";	   
	$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into liv_cours (url,type) VALUES ('".$fileName."','$ty')");
            if($insert){
                header("LOCATION: ../permis.php?status=3");
            }else{
                header("LOCATION: ../ajoutpermis.php");
            } 
        }else{
           header("LOCATION: ../ajoutpermis.php");
        }
    }else{
        header("LOCATION: ../ajoutpermis.php");
    }
}else{
    header("LOCATION: ../ajoutpermis.php");
}

// Display status message

		
	mysqli_close($db); // fermer la connexion
			
			
			
			?>