<?php 
session_start();
?>
<html>
<head>
<title>
Home - Yalla Drive
</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
<link href="css/code_route.css" rel="stylesheet">
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

<button onclick="topFunction()" id="myBtn" title="Go to top">	&#128285;</button>
<?php

	include "../log_sql.php";
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
    $requete = "select url from livre where p_g = 'Gratuit' ";
	$result = mysqli_query($db,$requete);
	
		while($row = mysqli_fetch_array($result)){
			$_SESSION['urn'] = "".$actual_link."/../admin/uploads/" . $row['url'];
		}
	/*********************************/
	 $requete2 = "select prix from livre where p_g = 'Payant' ";
	$result2 = mysqli_query($db,$requete2);
	
		while($row2 = mysqli_fetch_array($result2)){
			$_SESSION['prix'] = $row2['prix'];
		}
			
?>	


<div>
<ul style="margin-top: -26px;">
	<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
		<li><a  href="./index.php">ACCUEIL</a></li>
	<li><a href="./promos.php">NOS PROMOS</a></li>
	<li><a class="active">CODE DE LA ROUTE</a></li>
	<li><a href="./notre_agence.php">NOTRE AGENCE</a></li>
	<li><a href="./contact.php">CONTACT</a></li>
	<li><a href="./tst.php">TEST CODE</a></li>
  <li><a href="./profilUser.php">PROFIlE</a></li>
</ul>
</div>
<br/>

<div id="div3">
<br/><br/><br/>
<div id="row00">
<div class="row">
  <div class="column" style="background-color:#4b4a4a17;">
    <font color="red"><h2>Gratuit</h2></font>
  </div>
  <div class="column" style="background-color:#4b4a4a0f;">
    <h4>Livre de Code de La Route</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a17;">
    <h4>50 Pages</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a0f;">
    <h4>30 Question</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a17;">
    <a href="<?php echo $_SESSION['urn']; ?>" target="_blank"><button name="button" class="button">T&eacute;l&eacute;charger</button></a>
  </div>
</div>

<div class="row1">
  <div class="column" style="background-color:#4b4a4a17;">
    <font color="blue"><h2><?php echo $_SESSION['prix']; ?>$</h2></font>
  </div>
  <div class="column" style="background-color:#4b4a4a0f;">
    <h4>Livre de Code de La Route</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a17;">
    <h4>500 Pages</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a0f;">
    <h4>300 Question</h4>
  </div>
  <div class="column" style="background-color:#4b4a4a17;">
    <a href="./card.php"><button name="button2" class="button2">T&eacute;l&eacute;charger</button></a>
  </div>
</div>

</div>
<br/><br/><br/><br/><br/><br/>
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

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
</body>
</html>