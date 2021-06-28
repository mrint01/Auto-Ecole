<?php
session_start();
include "sql/profil_sql.php";

?>

<html>
<head>
<title>
ADMIN - Yalla Drive
</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
<link href="css/profil.css" rel="stylesheet">
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

<button onclick="topFunction()" id="myBtn" title="Go to top">	&#128285;</button>



<ul id="css3menu1" class="topmenu">
  <li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  <li><a  href="./index.php">Tableau de bord</a></li>
  <li><a  href="./profil.php">Profil</a></li>
  <li><a class="active" href="./user.php">Gestion D'utilisateurs</a></li>
   
  <li><a href="./code.php">Code De La Route</a></li>
</ul>

<div id="div01">

  <center>
  
 <ul id="css3menu2" class="topmenu">
 
	<li><a class="active" href="./user.php">Utilisateurs</a></li>
	<li><a href="./moniteur.php">Moniteurs</a></li>
	<li><a  href="./admin.php">Administrateurs</a></li>
	<li id="bnn"><center><a href="./ajoutusr.php"><button  id='button12' >Ajouter</button></a></center></li>
	
	
</ul>

  <br/><br/>
  <div id="popup5">
    Mise a jour r&eacute;ussie
</div>
  <div id="popup">
    L'utilisateur a été supprimé

</div>
 <div id="popup2">
    L'utilisateur a été insere

</div> 
  </center>
  
 <table id="customers">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Nom Complet</th>
    <th>Email</th>
    <th>Afficher</th>
  </tr>
  <?php include "sql/usr_sql.php"; ?>
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
<?php 
    $recordAdded = false;

    if(isset($_GET['status']) && ($_GET['status'] == 1))
		
		{
			$recordAdded = true;

    if($recordAdded)
    {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("popup").style.visibility = "hidden";
         }

         document.getElementById("popup").style.visibility = "visible";
		  window.setTimeout("hideMsg()", 2000);
       </script>';
    }
		}elseif(isset($_GET['status']) && ($_GET['status'] == 2))
		
		{
			$recordAdded = true;

    if($recordAdded)
    {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("popup2").style.visibility = "hidden";
         }

         document.getElementById("popup2").style.visibility = "visible";
		  window.setTimeout("hideMsg()", 2000);
       </script>';
    }
		}
		elseif(isset($_GET['status']) && ($_GET['status'] == 3))
		
		{
			$recordAdded = true;

    if($recordAdded)
    {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("popup5").style.visibility = "hidden";
         }

         document.getElementById("popup5").style.visibility = "visible";
		  window.setTimeout("hideMsg()", 2000);
       </script>';
    }
		}
		?>