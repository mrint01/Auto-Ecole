<?php
   include "../../log_sql.php";

$id = $_GET['id'];
 echo $id;

$query=("DELETE from message WHERE id='$id'");
$result=mysqli_query($db,$query);

?>