<html>
		<head>
			<title>  CONTACTEZ-NOUS </title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/contact.css"/>
			<link rel="shortcut icon" type="image/x-icon" href="icon.png">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
	
<div id="div1">
<div id="div2">
<a href="login" id="idn">S'identifier</a>/
<a href="./inscri"  id="idn2">Inscription</a>
</div>
</div>
			<div>
			<ul>
	<li><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
	<li><a href="./">ACCUEIL</a></li>
	<li><a href="./promos.php">NOS PROMOS</a></li>
	<li><a href="./code_route.php">CODE DE LA ROUTE</a></li>
	<li><a href="./agent.php">NOTRE AGENCE</a></li>
	<li><a class="active" href="./contact.php">CONTACT</a></li>
</ul>
			</div>
	
		<div class="contact-section">
			<h1> Contactez-Nous</h1>
			 <div class="border"></div>
			     <div id="popup2">
         Merci, votre message a été envoyé

            </div>
			<form action="./sql/contact_sql.php" method="POST" >
				<input type="text" name="username" class="contact-form-text" placeholder="Entrer votre Nom et Prénom" required />
				<input type="email" name="email" class="contact-form-text" placeholder="Entrer votre Email" required />
				<textarea  name="message" class="contact-form-text" placeholder="Ecrire un message" required></textarea>
				<button type="submit" name ="envoyer" class="envoyerbtn">Envoyer</button>
			</form>

		</div>
		



			<div id="div5">		
			<center>
<img id="img6" src="img/img2.JPG" >

<br/>
<p id="txt5">l'auto-&eacute;cole nouvelle g&eacute;n&eacute;ration ! Notre objectif ? Rendre plus accessible la formation au permis de conduire pour pouvoir
<br/>s'entrainer ou l'on veut et quand on le veut a petit prix..</p>

</br>
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

<?php

if(isset($_GET['status']) && ($_GET['status'] == 2))
		
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
		
?>