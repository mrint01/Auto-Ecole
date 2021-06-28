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
<meta http-equiv="refresh" content="3; URL=./confirm_pay.php">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form name="f" action="./loading.php" method="POST" onsubmit="return validateForm()">
<div id="div1">
<div id="div2">
<center>
<label> Bienvenue ! </label> <font color="blue"><b><?php echo $_SESSION['username']; ?></b></font><label>     </label>
<a href="./sql/logout.php"><img title="Deconnexion" src="img/logout.png" class="imggg"></a>
</center>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">	&#128285;</button>



<div>
<ul>
	<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
	<li><a href="./promos.php">NOS PROMOS</a></li>
	<li><a class="active">CODE DE LA ROUTE</a></li>
	<li><a href="./notre_agence.php">NOTRE AGENCE</a></li>
	<li><a href="./contact.php">CONTACT</a></li>
	<li><a href="./tst.php">TEST CODE</a></li>
  <li><a href="./profilUser.php">PROFIlE</a></li>
</ul>
</div>
<br/>
<center>
<div id="div33">


<img src="img/load.gif" >


	</div>
</center>


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

</body>
</html>