<?php
session_start();
 include "../../log_sql.php";
	
	$nm = $_POST['2'];
	$ne = $_POST['3'];
	$ns = $_POST['4'];
	$usf = $_SESSION['idop'];

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
            $insert = $db->query("UPDATE livre set url = '".$fileName."',
						 p_g = '$nm',
						 prix = '$ne',
						 paye = '$ns'
						WHERE id = '$usf'");
            if($insert){
                header("LOCATION: ../code.php?status=1");
            }else{
                //echo "not good";
				header("LOCATION: ../code.php");
            } 
        }else{
          // echo "errr";
		   header("LOCATION: ../code.php");
        }
    }else{
        //echo "bddd";
		header("LOCATION: ../code.php");
    }
}else{
    //echo "fff";
	header("LOCATION: ../code.php");
}
		
	mysqli_close($db); // fermer la connexion

?>