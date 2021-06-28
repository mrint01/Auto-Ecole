<?php
session_start();
 include "../../log_sql.php";
		   

$ss = $_SESSION['admin1'];

$query=("DELETE from users WHERE username='$ss'");
$result=mysqli_query($db,$query);
header("LOCATION: ../admin.php?status=1");
?>