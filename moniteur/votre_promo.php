<?php
		include "./sql/profil.php";

	?>
	<html>
		<head>
			<title>  profil moniteur </title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/votre_promo.css"/>
			<link rel="shortcut icon" type="image/x-icon" href="icon.png">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
	
			<div id="div1">
				<div id="div2">
					<center>
						<a href="../" target="_blank"><img class="imggg" src="img/web.png"></a> <label> Bienvenue ! </label> <font color="blue"><b><?php echo $_SESSION['username']; ?></b></font><label>     </label>
						<a href="sql/logout.php"><img title="Deconnexion" src="img/logout.png" class="imggg"></a>
					</center>
				</div>
			</div>
			<div>
				<ul>
					<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
					<li><a  class="profil" href="./">PROFIL</a></li>
					<li><a class="active" href="./votre promo.php">VOTRE PROMOS</a></li>
					<li><a class="contact" href="./contact.php">CONTACT</a></li>
				</ul>
			</div>
			<br/> </br> </br>
			
				<br/><br/><br/>
				<div id="div01">
 <table id="customers">
  <tr>
    
    <th>Heure d'observation</th>
    <th>Heure de conduite</th>
    <th>Code de la route</th>
    <th>Prix du promo</th>
    <th>Action</th>
  </tr>
  <?php 
  include "sql/votre promo_sql.php";
  
  ?>
</table>
  <br/><br/>

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
