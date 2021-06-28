<?php
 include "../../log_sql.php";

$id = $_GET['id'];

$query=("DELETE from liv_cours WHERE id='$id'");
$result=mysqli_query($db,$query);
header("LOCATION: ../permis.php?status=2");

?>