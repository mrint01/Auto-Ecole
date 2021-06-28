function validateForm() {
  var x = document.forms["f"]["1"].value;
  var y = document.forms["f"]["2"].value;
  if (x == "") {
    alert("Le mot de passe doit etre rempli");
    return false;
  }else if (y == ""){
	   alert("Le mot de passe doit etre rempli");
    return false;
  }
}

function valid() {
  var fe = document.f.nom.value;
  var dd = document.forms["f"]["pws"].value;
  var s = document.forms["f"]["np"].value;
  var e = document.forms["f"]["dob"].value;
  var r = document.forms["f"]["gnr"].value;
  var re = document.forms["f"]["rg"].value;
  var tel = document.forms["f"]["num"].value;
  var tp = document.forms["f"]["type"].value;
  var a = document.forms["f"]["em"].value;

	  
  if (fe == "") {
    alert("Le Nom d'utlisateur doit etre rempli");
    return false;
  }if (dd == ""){
	   alert("Le mot de passe doit etre rempli");
    return false;
  } if (s == ""){
	   alert("Le Nom et prenom doit etre rempli");
    return false;
  } if (e == ""){
	   alert("Le Date de naissance doit etre rempli");
    return false;
  } if (r == ""){
	   alert("Le Genre doit etre selectionne");
    return false;
  } if (re == ""){
	   alert("Le Region doit etre rempli");
    return false;
  } if (a == ""){
	   alert("Le Email doit etre rempli");
    return false;
  }if ((tel == "")||(tel.length < 8)){
	   alert("Le numero doit etre rempli et egale a 8 chiffres");
    return false;
  } if (tp == ""){
	   alert("Le Type doit etre selectionne");
    return false;
  }
  
}