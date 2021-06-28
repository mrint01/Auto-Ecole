<?php
session_start();
include "../log_sql.php";
$us = $_SESSION['username'];
$sql = "SELECT * from users where username = '$us'";
$result = mysqli_query($db,$sql);


    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   

   $_SESSION['nom']=$row[3];
    $_SESSION['ddate']=$row[4];
   $_SESSION['genre']=$row[5];
    $_SESSION['region']= $row[6];
    $_SESSION['email']= $row[7];
    $_SESSION['numero']=$row[8];
    //$_SESSION['username']=$row[1];

}


?>
<html>
		<head>
			<title>  profil utilisateur </title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/profilUser.css"/>
			<link rel="shortcut icon" type="image/x-icon" href="icon.png">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
		


<div id="div1">
<div id="div2">
<center>
<label> Bienvenue ! </label> <font color="blue"><b><?php echo $_SESSION['username']; ?></b></font><label>     </label>
<a href="./sql/logout.php"><img title="Deconnexion" src="img/logout.png" class="imggg"></a>
</center>
</div>

</div>




<div>
<ul>
  <li ><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  	<li><a  href="./index.php">ACCUEIL</a></li>
	<li><a href="./promos.php">NOS PROMOS</a></li>
	<li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
	<li><a href="./notre_agence.php">NOTRE AGENCE</a></li>
	<li><a href="./contact.php">CONTACT</a></li>
	<li><a href="./tst.php">TEST CODE</a></li>
  <li><a class="active">PROFIlE</a></li>

</ul>
</div>

			<br/>







<form  action="./modif.php" method="POST" >
			<section class="about-me">

				<div class="container">
					<div class="row">
						<div class="section-title">
							<h1> Bienvenue  </h1>
						</br>
						<h1>     <?php echo $_SESSION['username']; ?></h1>
							<p class="small text-uppercase"> </p>
						</div>
					</div>



					<div class="row">
						<div class="about-content">
						<div class="row">
							<div class="img">
								<img src="img/profil.PNG" alt="about-me"/>
							</div>
						<div class="text">		
							<div class="info">
								<div class="liste">
									<label>Nom et Prénom :</label>
									<p><?php echo $_SESSION['nom'];?></p>
								</div>
								<div class="liste">
									<label>Sexe :</label>
									<p><?php echo  $_SESSION['genre']; ?></p>
								</div>
								<div class="liste">
									<label>Adresse :</label>
									<p><?php echo  $_SESSION['region']; ?></p>
								</div>
								<div class="liste">	
									<label>Date de naissance :</label>
									<p><?php echo  $_SESSION['ddate']; ?></p>
								</div>	
								<div class="liste">	
									<label>Télephone :</label>
									<p><?php echo  $_SESSION['numero']; ?></p>
								</div>
								<div class="liste">
									<label>Email :</label>
									<p><?php echo $_SESSION['email']; ?></p>
								</div>
								<div class="lis">
									<label>           </label>
									<p>           </p>
								</div>
								<div class="lis">
									<label>           </label>
									<p>           </p>
								</div>
								<div class="lis">
									<label>           </label>
									<p>           </p>
								</div>
								<div class="lis" align="center">
									<div class="clearfix" >
      <button type="submit" name ="modifer" class="modifierbtn">Modifier</button>
								</div>
							</div>

						</div>
						</div>	

					</div>
	
    </div>
				</div>
			</section>	

</div></section></div>



</form>






<div id="div5">
<center>
<br/><br/>
<img id="img6" src="img/img2.JPG" >

<br/>
<p id="txt5">l'auto-&eacute;cole nouvelle g&eacute;n&eacute;ration ! Notre objectif ? Rendre plus accessible la formation au permis de conduire pour pouvoir
<br/>s'entrainer ou l'on veut et quand on le veut a petit prix..</p>



</center>
<div align="center">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
<center>
<p class="pe"> &copy; Copyright 2020, Tous les droits R&eacute;serv&eacute;s - YallaDrive</p>
</center>
</div>


</body>
</html>

