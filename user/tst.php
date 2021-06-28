<?php 
session_start();
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
		<link href="./css/tst.css" rel="stylesheet">
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
<ul id="css3menu1" class="topmenu">
  <li ><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  <li><a   href="./index.php">ACCUEIL</a></li>
  <li ><a href="./promos.php">NOS PROMOS</a></li>
  <li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
  <li ><a   href="./notre_agence.php">NOTRE AGENCE</a></li>
  <li><a href="./contact.php">CONTACT</a></li>
  <li><a   class="active" >TEST CODE</a></li>
  <li ><a  href="./profilUser.php">PROFILE</a></li>

</ul></div>
<br/><br/>
<center>
<div id="div222">

 <ul id="css3menu2" class="topmenu">
 
	<li><a class="active" href="#">Test</a></li>
	<li><a href="./his.php">Historique</a></li>
</ul>
<br/><br/>
<a href="testcode.php"><button class='button2' >Lancer le Test</button></a>

<br/><br/>
</div>

</center>


<br/><br/>
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
