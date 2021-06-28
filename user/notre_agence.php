<?php 
session_start();
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <link href="./css/notreAgence.css" rel="stylesheet">
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
  <li id="ac"><a   href="./index.php">ACCUEIL</a></li>
  <li ><a href="./promos.php">NOS PROMOS</a></li>
  <li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
  <li id="ac"><a   class="active" >NOTRE AGENCE</a></li>
  <li><a href="./contact.php">CONTACT</a></li>
  <li><a href="./tst.php">TEST CODE</a></li>
  <li><a href="./profilUser.php">PROFILE</a></li>

</ul></div>
<br/><br/>


 <div id = "boxes"> 
            
              <img src="img/map.PNG" alt="titre" >
<br/><br/><div class="center">
            <div id = "leftbox"> 
                <h2>NOTRE AGENCE:</h2> 
               <p class="sansserif"><strong>
Avec PermisPromo.tn Vous pouvez obtenir votre Permis de conduire à petit prix grâce à notre expérience qui dépasse 35 ans et nos offres imbattables dont Vous pouvez profiter d’une formation du code complète et en illimité où Vous aurez des formateurs à votre disposition jusqu’à la réussite de votre examen avec une préparation psycho-technique avant  de passer au conduite où Vous aurez une formation théorique pour la conduite avec votre moniteur qui aura à votre disposition pour la formation de conduite.
Vous pouvez choisir l’une de nos offres selon votre expérience au conduite.</strong></p>
            </div>  
              
          
              
            <div id = "rightbox"> 
               
                <img id ="mg2"src="img/map2.PNG" alt="titre" >
            </div> 
        </div> 





</div>












<div class="center2">
        <div id="map" style="width:50%; height:50% ;display: block;margin-left: auto;margin-right: auto;   "></div>

</div>


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
<script type="text/javascript">
	var options = {
        center: new google.maps.LatLng(36.713432, 10.209552),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
        
    var map = new google.maps.Map(document.getElementById("map"), options);
    
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(36.713432, 10.209552),
        map: map,
        title: "Locronan - Rue du Prieuré",
        icon: new google.maps.MarkerImage('icon.png')
    });
 

    var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map, marker);
    });</script>
