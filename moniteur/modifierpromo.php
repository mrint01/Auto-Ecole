<html>
		<head>
			<title>  EDIT PROMO </title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/ajouterpromo.css"/>
			<link rel="shortcut icon" type="image/x-icon" href="icon.png">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>

			<div id="div1">
				<div id="div2">
					<center>
						<?php
		
		include "./sql/profil.php";
		include "./sql/modifierpromo_sql.php";
		
  
?>
						<a href="../" target="_blank"><img class="imggg" src="img/web.png"></a> <label> Bienvenue ! </label> <font color="blue"><b><?php echo $_SESSION['username']; ?></b></font><label>     </label>
						<a href="sql/logout.php"><img title="Deconnexion" src="img/logout.png" class="imggg"></a>
					</center>
				</div>
			</div>
			<div>
				<ul>
					<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
					<li><a  class="profil" href="./">PROFIL</a></li>
					<li><a class="active" href="./votre_promo.php">VOTRE PROMOS</a></li>
					<li><a class="contact" href="./contact.php">CONTACT</a></li>
				</ul>
			</div>
		</br></br></br></br>
		
			<fieldset class="fs1">

  <div class="right">
  	<form method="POST" name="f" action="./sql/modifpromoss_sql.php" onsubmit="return validate();">
				<p>
       <label for="nom"><b> Heure d'observation : </b></label>
       <input type="text" name="heure_obss"    value="<?php echo $_SESSION['heure_obs'] ?>" />

      </p>

      <p>
       <label for="nom"><b> Heure de conduite  : </b></label>
       <input type="text" name="heure_cond"  value="<?php echo $_SESSION['heure_cond'] ?>"  />

      </p> 
     	<p>
       <label for="nom"><b>Code de la route :</b></label>
       <input type="text"  name="code_route" value="<?php echo $_SESSION['code_route']; ?>"/>
  </p>
    <p>
        <label for="prix"><b>Prix du promo:</b></label>
        <input type="text" name="prix_promo"  value="<?php echo $_SESSION['prix_promo']; ?>" />
                     
     </p>
 
  <div class="clearfix">
      <button type="submit" name ="Enregistrer" class="envoyerbtn">Enregistrer</button>

     <a href="./votre_promo.php"><button type="button" name="annuler"class="annulbtn">Retour</button></a>
    </div>
  
</div>
</fieldset>
   
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
