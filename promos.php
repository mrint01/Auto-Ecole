<?php
session_start();
include "./log_sql.php";

$sql = "select * from promos where id_user = 'khaled'";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['heure_obs1']=$row[2];
    $_SESSION['heure_cond1']=$row[3];
   $_SESSION['code_route1']=$row[4];
    $_SESSION['prix1']= $row[5];
  


}
$sql = "SELECT * from users where id=2";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['nom1']=$row[3];
   $_SESSION['region1']= $row[6];
   $_SESSION['numero1']=$row[8];
   
}


$sql = "select * from promos where id_user ='ahmed'";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['heure_obs2']=$row[2];
    $_SESSION['heure_cond2']=$row[3];
   $_SESSION['code_route2']=$row[4];
    $_SESSION['prix2']= $row[5];
  


}
$sql = "SELECT * from users where id=4";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['nom2']=$row[3];
   $_SESSION['region2']= $row[6];
   $_SESSION['numero2']=$row[8];
   
}

$sql = "select * from promos where id_user = 'mohamed'";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['heure_obs3']=$row[2];
    $_SESSION['heure_cond3']=$row[3];
   $_SESSION['code_route3']=$row[4];
    $_SESSION['prix3']= $row[5];
  


}
$sql = "SELECT * from users where id=5";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['nom3']=$row[3];
   $_SESSION['region3']= $row[6];
   $_SESSION['numero3']=$row[8];
   
}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <link href="./css/promos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./css/pr.css" rel="stylesheet">

    </head>

    <body>
	
<div id="div1">
<div id="div2">
<a href="login" id="idn">S'identifier</a>/
<a href="./inscri"  id="idn2">Inscription</a>
</div>
</div>

      <div>
<ul id="t1">
  <li ><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  <li ><a  href="./index.php">ACCUEIL</a></li>
  <li id="ac"><a class="active">NOS PROMOS</a></li>
  <li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
	<li><a href="./agent.php">NOTRE AGENCE</a></li>
  <li><a href="./tst.php">TEST CODE</a></li>


</ul>


  <div class="all">


<div class="plans">
    <div class="plan">
      <h2 class="plan-title"><font color="bleu">Promo Basic</font></h2>
      <p class="plan-price">$<?php echo $_SESSION['prix1'];?></p>
      <ul class="plan-features">
       <strong><?php echo $_SESSION['heure_obs1'];?></strong><br/>
        <strong><?php echo $_SESSION['heure_cond1'];?></strong><br/>
       <strong><b><font color="red">Nom de moniteur :</font></b><strong><br/>
        <strong><?php echo $_SESSION['nom1'];?></strong><br/>
		<strong><b><font color="red">Numéro :</font></b><strong><br/>
        <strong><?php echo $_SESSION['numero2'];?></strong>
        
      </ul>
    </div>
    <div class="plan plan-tall">
      <h2 class="plan-title"><font color="red" >Promo Extra</font></h2>
      <p class="plan-price">$<?php echo $_SESSION['prix2'];?></p>
       <ul class="plan-features">
        <strong><?php echo $_SESSION['heure_obs2'];?></strong><br/>
        <strong><?php echo $_SESSION['heure_cond2'];?><strong><br/>
        <strong><b><font color="red">Nom de moniteur :</font></b><strong><br/>
        <strong><?php echo $_SESSION['nom2'];?></strong><br/>
		<strong><b><font color="red">Numéro :</font></b><strong><br/>
        <strong><?php echo $_SESSION['numero2'];?></strong>
     
      </ul>

    </div>
    <div class="plan">
      <h2 class="plan-title"><font color=#DB7093;>Promo Best'Of</font></h2>
      <p class="plan-price">$<?php echo $_SESSION['prix3'];?></p>
      <ul class="plan-features">
        <strong><?php echo $_SESSION['heure_obs3'];?></strong><br/>
        <strong><?php echo $_SESSION['heure_cond3'];?></strong><br/>
        <strong><b><font color="red">Nom de moniteur :</font></b><strong><br/>
        <strong><?php echo $_SESSION['nom3'];?></strong><br/>
		<strong><b><font color="red">Numéro :</font></b><strong><br/>
        <strong><?php echo $_SESSION['numero3'];?></strong>

      </ul>

    </div>
  </div>




  </div>


























<div id="div5">
<center>
<br/><br/>
<img id="img6" src="img/img2.JPG" >




   <br/>
   <p id="txt5">l'auto-&eacute;cole nouvelle g&eacute;n&eacute;ration ! Notre objectif ? Rendre plus accessible la formation au permis de conduire pour pouvoir
<br/>s'entrainer ou l'on veut et quand on le veut a petit prix..</p>
</center>
<div align="center">
<a   href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
<br/><br/>
<center>
<p class="pe"> &copy; Copyright 2020, Tous les droits R&eacute;serv&eacute;s - YallaDrive</p>
</center>
</div>
</body>
</html>
