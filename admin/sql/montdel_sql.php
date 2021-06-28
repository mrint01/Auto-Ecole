<?php
session_start();
   include "../../log_sql.php";
		   

$ss = $_SESSION['mont1'];

$query=("DELETE from users WHERE username='$ss'");
$result=mysqli_query($db,$query);
header("LOCATION: ../moniteur.php?status=1");
?>