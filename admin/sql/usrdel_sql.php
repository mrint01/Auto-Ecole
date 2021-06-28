<?php
session_start();
  include "../../log_sql.php";
		   

$ss = $_SESSION['uss'];

$query=("DELETE from users WHERE username='$ss'");
$result=mysqli_query($db,$query);
header("LOCATION: ../user.php?status=1");
?>