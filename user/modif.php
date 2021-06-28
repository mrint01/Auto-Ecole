<?php
session_start();
?>
  <html>

<head>
    <meta charset="utf-8">
    <title>Modifier Profil</title>
    <link rel="stylesheet"  href="css/modif.css" type="text/css"/>
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

</br>
<fieldset class="fs1">


  <div class="right">
        <form method="POST" name="f" action="./sql/modif.php" onsubmit="return validate();">
        
        <p>
       <label for="nom"><b> Nom d'utilisateur : </b></label>
       <input type="text" name="user"  id="nom" value="<?php echo $_SESSION['username']; ?>" />

      </p>

      <p>
       <label for="nom"><b> Nom et Prénom  : </b></label>
       <input type="text" name="nom"  id="nom" value="<?php echo $_SESSION['nom']; ?>" />

      </p> 
     
     
       <p>
         <div class="box">
        <tr>
       <div id="dn">
         <td> <label for="Dn"> <b>Date de Naissance :</b></label> </td>
         <td><input type="text" name="date"  id="nom" value="<?php echo $_SESSION['ddate']; ?>" /></td>


    
  <p>
    <div class="box">
        <label for="region"><b> Région :</b></label> 
        <select name="region">
           <option value="<?php echo $_SESSION['region']; ?>" selected> <?php echo $_SESSION['region']; ?> </option>
        <option value="Ben Arous"  >Ben Arous </option>
        <option value="Bou Mhel ">Bou Mhel  </option>
        <option value="El Mourouj ">El Mourouj   </option>
        <option value="Ezzahra">Ezzahra </option>
        <option value="Fouchana">Fouchana </option>
        <option value="Hammam Chott ">Hammam Chott   </option>
        <option value="Hammam Lif ">Hammam Lif   </option>
        <option value="Mohamedia">Mohamedia </option>
        <option value="Medina Jedida  ">Medina Jedida  </option>
        <option value="Mégrine">Mégrine </option>
        <option value="Mornag ">Mornag   </option>
        <option value="Radès">Radès </option>
        </select>
      </div>
  </p>


    <p>
       <label for="email"><b>E-mail :</b></label>
       <input type="email" name="email"  id="email" value="<?php echo $_SESSION['email']; ?>"   />
  </p>  

    <p>
       <label for="numero"><b> Téléphone :</b></label>
       <input type="tel" name="numero"  value="<?php echo $_SESSION['numero']; ?>" id="numero"  />

  </p>
    <p>
       <label for="password"><b>Nouveau mot de passe :</b></label>
       <input type="password"  name="password" placeholder="Votre nouveau mot de passe" >
  </p>
    <p>
        <label for="psw-repeat"><b>Confirmation mot de passe :</b></label>
        <input type="password" name="psw2" placeholder="Confirmation du mot de passe"  >
                     
     </p>
 
  <div class="clearfix">
      <button type="submit" name ="envoyer" class="envoyerbtn">Enregistrer</button>
     <button type="reset" name="annuler"class="annulbtn">Annuler</button>
	 <a href="./profilUser.php"><button type="button" name="ret"class="retbtn">Retour</button></a>
 
    </div>
 
  </div>
</div>


</form>
</fieldset>
<div id="div5">
<center>
<br/><br/>
<img id="img6" src="./img/img2.JPG" >

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
<br/><br/>
<center>
<p class="pe"> &copy; Copyright 2020, Tous les droits R&eacute;serv&eacute;s - YallaDrive</p>
</center>
</div>
</body>
</html> 