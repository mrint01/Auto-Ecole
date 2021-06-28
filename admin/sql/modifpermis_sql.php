<?php
session_start();

 include "../../log_sql.php";

	$nm = $_POST['2'];
	$usf = $_SESSION['iddd'];
	
   
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
            $insert = $db->query("UPDATE liv_cours set url = '".$fileName."',
						 type = '$nm'
						WHERE id = '$usf'");
            if($insert){
                header("LOCATION: ../permis.php?status=1");
            }else{
                //echo "not good";
				header("LOCATION: ../permis.php");
            } 
        }else{
          // echo "errr";
		   header("LOCATION: ../permis.php");
        }
    }else{
        //echo "bddd";
		header("LOCATION: ../permis.php");
    }
}else{
    //echo "fff";
	header("LOCATION: ../permis.php");
}

	mysqli_close($db); // fermer la connexion

?>