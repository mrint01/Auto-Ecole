function validate() {


   var a = document.f.password.value;
   var b = document.f.psw2.value;
   if (a != b) {
   	alert("Les mots de passe ne correspondent pas.");
   	return false;

  }
}