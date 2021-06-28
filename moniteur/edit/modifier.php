<?php
include "../sql/profil.php";
include "../log_sql.php";
$ud = $_SESSION['username'];

  $req = "select region from users where username ='$ud'";
  $res = mysqli_query($db,$req);
  while($row = mysqli_fetch_array($res))
  {
    $_SESSION['reg'] = $row[0];
  }

?>
  <html>

<head>
    <meta charset="utf-8">
    <title>EDIT PROFIL</title>
    <link rel="stylesheet"  href="./css/modifier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/modif.js"></script>
</head>
<body>


<div id="div1">

      </div>
      <div>
        <ul>
          <li><img id="img2" src="./img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
          <li><a class="active" href="../">PROFIL</a></li>
          <li><a class="promo" href="../votre_promo.php">VOTRE PROMOS</a></li>
          <li><a class="contact"href="../contact.php">CONTACT</a></li>
        </ul>
      </div>
</br>
<fieldset class="fs1">


  <div class="right">
        <form method="POST" name="f" action="./sql/modifier_sql.php" onsubmit="return validate();">
        
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
         <td><input type="text" name="date"  id="nom" value="<?php echo $_SESSION['dob']; ?>" /></td>


    
  <p>
    <div class="box">
        <label for="region"><b> Région :</b></label> 
        <select name="region">
           <option value="<?php echo $_SESSION['reg']; ?>" selected> <?php echo $_SESSION['reg']; ?> </option>
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
       <input type="tel" name="numero"  value="<?php echo $_SESSION['phone_number']; ?>" id="numero"  />

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
    </div>
 


  </div>
</div>


</form>
</fieldset>
</body>
</html> 