<?php
// Create connection to BD
include "../../log_sql.php";

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

           $sql ="insert into message values(null,'$username','$email','$message')";
 
           if($db->query($sql)==TRUE)
           {
               
               header("LOCATION: ../contact.php?status=2");
           }
           else
           {
               header("LOCATION: ../contact.php");
           }
 
 mysqli_close($db);
?>