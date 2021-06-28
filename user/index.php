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
<link href="css/index.css" rel="stylesheet">
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.mySlides {display:none;}
</style>

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

<button onclick="topFunction()" id="myBtn" title="Go to top">	&#128285;�</button>



<div>
<ul>
	<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
	<li><a class="active" href="#home">ACCUEIL</a></li>
	<li><a href="./promos.php">NOS PROMOS</a></li>
	<li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
	<li><a href="./notre_agence.php">NOTRE AGENCE</a></li>
	<li><a href="./contact.php">CONTACT</a></li>
	<li><a href="./tst.php">TEST CODE</a></li>
  <li><a href="./profilUser.php">PROFIlE</a></li>
</ul>
</div>
<br/>
<div id="div6">
  <img class="mySlides" src="img/img3.png" style="width:100%">
  <img class="mySlides" src="img/img4.png" style="width:100%">
  <img class="mySlides" src="img/img5.png" style="width:100%">
</div>


<br/><br/>
<center>
<div id="div7">
<h2>C’est quoi YallaDrive?</h2>
YallaDrive.tn c’est avant tout l’auto-école nouvelle génération !<br/> Notre objectif ? Rendre plus accessible la formation au permis <br/> de conduire pour pouvoir s’entraîner où l’on veut et quand on <br/> le veut à petit prix. Nous proposons une formation de qualité avec  <br/> deux avantages majeurs. Vous pouvez vous former au code de <br/> la route sur votre téléphone, tablette ou ordinateur à 100% <br/> en ligne ou bien au sein de notre centre de formation en illimité. <br/>Code validé, place à la conduite ! Vous pouvez choisir votre lieu <br/> de rendez-vous ainsi que le moniteur  de votre choix<br/>et réserver vos heures de conduite en temps réel sur votre planning.<br/>
<img src="img/img6.png"   id="img3">

</div>
</center>
<br/><br/><br/><br/>
<br/><br/>
<div id="div3" align="center">
<p id="txt2">Des questions?
<span>Appelez-nous!</span></p>
<p class="p">Attention! Les places sont limitées. Ne ratez pas l’occasion!</p>
<address>71 340 340</address>
<img id="img4" src="img/img8.png">
</div>


<video loop autoplay muted>
  <source src="img/g.mp4" type="video/mp4">
  <source src="img/g.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>


<div id="div4" align="center">
<h3>91% de nos clients ont obtenu leur Permis</h3>
<h5 id="txt3"><b>Dés le premier examen!</b></h5>
</div>
<img id="img5"src="img/img9.png">
<br/><br/><br/>
<h3 id="txt4" align="center">Découvrez nos Points de Rendez-Vous!</h3>

<div id="div8">
<center>
<img  src="img/img10.png"><p >Plus de 16 Points de <br/>RDV à Ariana</p><br/>
<img  src="img/img11.png"><p >Plus de 19 Points de <br/>RDV à Tunis</p><br/>
<img  src="img/img12.png"><p>Plus de 19 Points de <br/>RDV à Ben Arous</p><br/>
<img  src="img/img13.png"><p >Plus de 16 Points de <br/>RDV à Mannouba</p>
</center>
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