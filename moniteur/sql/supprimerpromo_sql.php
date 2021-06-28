<?php

 include "../log_sql.php";
$id = $_GET['id'];

$query=("DELETE from promos WHERE id='$id'");
$result=mysqli_query($db,$query);
header("LOCATION: ../votre_promo.php?status=2");

?>