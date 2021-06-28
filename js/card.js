function validateForm() {
  var x = document.forms["f"]["nm"].value;
  var y = document.forms["f"]["card"].value;
  var z = document.forms["f"]["expire"].value;
  var s = document.forms["f"]["ccv"].value;
  if (x == "") {
    alert("Le Titulaire de la carte doit etre rempli");
    return false;
  }else if ((y == "")||(y.length < 16)){
	   alert("Le Numéro de carte doit etre rempli et de 16 chiffres");
    return false;
  }else if ((z == "")||(z.length < 5)){
	   alert("Le Date de experation doit etre rempli");
    return false;
  }else if ((s == "")||(s.length < 3)){
	   alert("Le ccv doit etre rempli et de 3 chiffres");
    return false;
  }
}