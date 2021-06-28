<?php 
session_start();
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
		<link href="./css/tst.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
<script>
let n =0;
let score = 0;
let answer0 = 2;
let answer1 = 2;
let answer2 = 1;
let answer3 = 1;
let answer4 = 1;
let answer5 = 1;
let answer6 = 2;
let answer7 = 3;
let answer8 = 2;
let answer9 = 1;


function change(){
	if(document.f.rep.value == answer0){
			score++;
		}
	if(n==0){
		
		
		document.getElementById("change").innerHTML='<img src="./img/2.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 421px;" src="./qes/2.png" width="250" height="100">';
		
		n++;
		
	}
	else if(n==1){
		if(document.f.rep.value == answer1){
			score++;
		}
		document.getElementById("change").innerHTML='<img src="./img/3.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 300px;" src="./qes/3.png" width="150" height="100">';
	
		n++;
		
	}
	else if(n==2){
		if(document.f.rep.value == answer2){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/4.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 300px;" src="./qes/4.png" width="150" height="100">';
	
		n++;
		
	}
	else if(n==3){
		if(document.f.rep.value == answer3){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/5.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 360px;" src="./qes/5.png" width="250" height="100">';
	
		n++;
		
	}
	else if(n==4){
		if(document.f.rep.value == answer4){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/6.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 300px;" src="./qes/6.png" width="250" height="100">';
	
		n++;
		
	}
	else if(n==5){
		if(document.f.rep.value == answer4){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/7.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 430px;" src="./qes/7.png" width="250" height="100">';
	
		n++;
		
	}
	else if(n==6){
		if(document.f.rep.value == answer6){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/8.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 555px;" src="./qes/8.png" width="350" height="100">';
	
		n++;
		
	}
	else if(n==7){
		if(document.f.rep.value == answer7){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/9.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 300px;" src="./qes/9.png" width="150" height="100">';
	
		n++;
		
	}else if(n==8){
		if(document.f.rep.value == answer8){
			score++;
			// alert("score is "+score);
		}
		document.getElementById("change").innerHTML='<img src="./img/10.jpg">';
		document.getElementById("qes").innerHTML='<img style="width: 600px;" src="./qes/10.png" width="250" height="100">';
	
		n++;
		
	}
	else if(n==9){
		if(document.f.rep.value == answer9){
			score++;
		 window.location.replace("./sql/insertScore.php?id="+score);
		}else{
		 window.location.replace("./sql/insertScore.php?id="+score);
		}
		
	}else{
		// window.location.replace("./insertScore.php?id="+score);
		//alert("ur score is     "+score);
		
	}
	
	
}


</script>
<link href="css/style.css" rel="stylesheet">
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
<ul id="css3menu1" class="topmenu">
  <li ><img id="img2" src="img/icon.png"><p id="txt11"><font id="txt1" ><font color="blue">Y</font>alla <font color="red">D</font>rive </font></p></li>
  <li><a   href="./index.php">ACCUEIL</a></li>
  <li ><a href="./promos.php">NOS PROMOS</a></li>
  <li><a href="./code_route.php">CODE DE LA ROUTE GRATUIT</a></li>
  <li ><a   href="./notre_agence.php">NOTRE AGENCE</a></li>
  <li><a href="./contact.php">CONTACT</a></li>
  <li><a   class="active" >TEST CODE</a></li>
  <li ><a  href="./profilUser.php">PROFILE</a></li>

</ul></div>
<br/><br/>
<center>
<div id="div222">

 <ul id="css3menu2" class="topmenu">
 
	<li><a class="active" href="#">Test</a></li>
	<li><a href="./his.php">Historique</a></li>
</ul>
<br/><br/>



 <div id="popup2">
    Merci , Votre Score est : <?php echo $_SESSION['score']; ?>

</div> 
<div id="change" ><img src="./img/1.jpg"></div><br/>
<div id="qes"><img style="width: 300px;" src="./qes/1.png" width="80" height="100"></div>
<br/>
<form name="f">
<input type="text" name="rep" style="width:80px;border-radius:14px"><br/><br/>

<a onclick="change()" ><input type="button" class="button2" name="btn" value="Next"></a>
</form>





<br/><br/>
</div>

</center>


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
            document.getElementById("popup2").style.visibility = "hidden";
         }

         document.getElementById("popup2").style.visibility = "visible";
		  window.setTimeout("hideMsg()", 100000);
       </script>';
    }
		}
		?>
