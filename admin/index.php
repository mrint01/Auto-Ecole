<?php
session_start();
include "sql/dashboard_sql.php";

?>

<html>
<html lang="fr">
<head>
<title>
ADMIN - Yalla Drive
</title>
<meta charset="UTF-8">

<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
<link href="css/index.css" rel="stylesheet">
<script type="text/javascript" src="js/index.js"></script>
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

<button onclick="topFunction()" id="myBtn" title="Go to top">	&#128285;ù</button>



<ul>
  <li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  <li><a class="active" href="./index.php">Tableau de bord</a></li>
  <li><a href="./profil.php">Profil</a></li>
  <li><a href="./user.php">Gestion D'utilisateurs</a></li>
   
  <li><a href="./code.php">Code De La Route</a></li>
</ul>

<div id="div01">

  <center>
<h2><p id="txt01">Tableau de bord</p></h2><br/><br/>
<div id="div02">
<center><p class="txt04" ><b>
<?php echo $_SESSION['typeadmin']; ?> </p>Administrateurs</b>
</center>
</div>
<div id="div03">
<center>
<p class="txt04" ><b><?php echo $_SESSION['typeuser']; ?> </p>Utilisateurs</b>
</center>
</div>
<div id="div04">
<center>
<p class="txt04" ><b><?php echo $_SESSION['typemoniteur']; ?> </p>Moniteurs</b>
</center>
</div>
<div id="div05">
<p class="txt04" ><b><?php echo $_SESSION['history']; ?> </p>Nombre De Test</b>

</div>
<div id="div06">
<p class="txt04" ><b><?php echo $_SESSION['livre']; ?></p>Livre D'achat</b>

</div>
<div id="div07">
<p class="txt04" ><b><?php echo $_SESSION['promos']; ?> </p>Promos</b>

</div>
  
  
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
</body>
</html>