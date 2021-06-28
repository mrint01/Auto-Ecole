function validateForm() {
  var x = document.forms["f"]["username"].value;
  var y = document.forms["f"]["password"].value;
  if (x == "") {
    alert("Le nom d'utilisateur doit etre rempli");
    return false;
  }else if (y == ""){
	   alert("Le mot de passe doit etre rempli");
    return false;
  }
}