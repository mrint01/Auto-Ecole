

<!DOCTYPE html>
<html>

<head>
 
    <meta charset="utf-8">
    <title>formulair</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	<script href="./js/js.js"></script>
</head>


<body>

<div class="right">


       <h1>Bienvenue dans Yalla Drive</h1> 

        <hr>

        <form method="POST" action="./sql/inscri.php">
        

      <p>
       <label for="nom"><b> Nom et Prénom : </b></label>
       <input type="text" name="nom" placeholder="Enter Nom et Prénom" id="nom" />

      </p> 
     
      <p>

       <label for="username"><b>Nom d'utilisateur :</b> </label>
       <input type="text" name="username" placeholder="Enter Nom d'utilisateur" id="username" />
     <p/>
       <p>
         <div class="box">
        <tr>
       <div id="dn">
         <td> <label for="Dn"> <b>Date de Naissance :</b></label> </td>
         <td><select name="jour" id="jour">  <option value="">Jour</option>
          <option value="1">1</option>
           <option value="2">2</option>
            <option value="3">3</option>
             <option value="4">4</option>
              <option value="5">5</option>
               <option value="6">6</option>
                <option value="7" >7</option>
                 <option value="8">8</option>
                  <option value="9">9</option>  <option value="10">10</option>
                   <option value="11">11</option>  <option value="12">12</option>
                   <option value="13">13</option>  <option value="14">14</option>
                    <option value="15">15</option>  <option value="16">16</option>
                     <option value="17">17</option>  <option value="18">18</option>
                      <option value="19" >19</option>
                       <option value="20">20</option>  <option value="21">21</option>
                        <option value="22">22</option>  <option value="23">23</option>
                          <option value="24">24</option>
                           <option value="25">25</option>
                            <option value="2">2</option>  <option value="26">26</option>
                             <option value="4">4</option>  <option value="27">27</option>
                              <option value="28">28</option>
                               <option value="29" >29</option>
                                <option value="30">30</option>   <option value="31">31</option>  </select></td>

  <td><select name="mois" id="mois" >  <option value="" >Mois</option><!--le mois-->
    <option value="1">Janvier</option>
     <option value="2">Février</option>
       <option value="3">Mars</option>
        <option value="4">Avril</option>
         <option value="5">Mai</option>
          <option value="6">Juin</option>
           <option value="7" >Juillet</option>
            <option value="8">Aout</option>
             <option value="9">Septembre</option>
              <option value="10">Octobre</option>  <option value="11">Novembre</option> 
              <option value="12">Décembre</option></select></td>

<td><select  name="annee" id="annee">  <option value="">Année</option><!--le mois-->
        
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
          <option value="1979">1979</option>
          <option value="1978">1978</option>
          <option value="1977">1977</option>
          <option value="1976">1976</option>
          <option value="1975">1975</option>
          <option value="1974">1974</option>
          <option value="1973">1973</option>
          <option value="1972">1972</option>
          <option value="1971">1971</option>
          <option value="1970">1970</option>
          <option value="1969">1969</option>
          <option value="1968">1968</option>
          <option value="1967">1967</option>
          <option value="1966">1966</option>
          <option value="1965">1965</option>
          <option value="1964">1964</option>
          <option value="1963">1963</option>
          <option value="1962">1962</option>
          <option value="1961">1961</option>
          <option value="1960">1960</option>
          <option value="1959">1959</option>
          <option value="1958">1958</option>
          <option value="1957">1957</option>
          <option value="1956">1956</option>
          <option value="1955">1955</option>
          <option value="1954">1954</option>
          <option value="1953">1953</option>
          <option value="1952">1952</option>
          <option value="1951">1951</option>
          <option value="1950">1950</option>
        

</select></td>

  </p></div>
      <p>
           <b>Genre :</b>

           <input type="radio" name="souhait" value="F" id="femme" /> <label for="femme">Femme</label>
           <input type="radio" name="souhait" value="H" id="homme" /> <label for="homme">Homme</label>
         
       </p>

    
  <p>
    <div class="box">
        <label for="region"><b> Région :</b></label> 
        <select name="region">
        <option value="Ben Arous" selected="Ben Arous">Ben Arous </option>
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
       <input type="text" name="email" placeholder="Enter Email" id="email"  required />
  </p>  

    <p>
       <label for="numero"><b>Numéro de téléphone :</b></label>
       <input type="text" name="numero" placeholder="Enter Numéro" id="numero" required />

  </p>
    <p>
       <label for="psw"><b>Mot de passe :</b></label>
        <input type="password" placeholder="Enter Password" name="psw1" required>
  </p>
    <p>
        <label for="psw-repeat"><b>Repeter Mot de passe :</b></label>
        <input type="password" placeholder="Repeat Password" name="psw2" required>
                     
     </p>
  


  <div class="clearfix">
      <button type="reset" name="annuler"class="annulbtn">Annuler</button>
      <button type="submit" name ="envoyer" class="signupbtn">Envoyer</button>
	  <a href="../index.php"><button type="button" name ="ret" class="retupbtn">Retour</button></a>
    </div>
 


</div>
</div>


</form>

   <div class="left">
     <img src="./img/golf1.jpg" >
     </div>

</body>
</html> 
