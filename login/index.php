<html>
<head>
 <title>Connexion</title>
 <meta charset="UTF-8">
 <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
 <link rel="stylesheet" a href="css/style.css">
 <script type="text/javascript" src="js/log.js"></script>
</head>
<body>
 <div class="container">
 <img src="img/login.jpg"/>
<form name="f" action="sql/log_sql.php" method="POST" onsubmit="return validateForm()">
 <div class="form-input">
 <input  type="text" name="username" placeholder="Nom D'utilisateur"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="Mot de Passe"/>
 </div>
 <input type="submit" type="submit" value="S'identifier" class="btn-login"/>
 </form>
 </div>
</body>
</html>





