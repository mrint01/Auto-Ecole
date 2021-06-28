<?php
 session_start();
 include "../../log_sql.php";
    $id = $_GET['id'];
	
	
	echo $id;

$query=("DELETE from history WHERE id='$id'");
$result=mysqli_query($db,$query);
header("LOCATION: ../his.php");



?>