<?php 
// connexion à la base de données
    $db_username = 'root@127.0.0.1';
    $db_password = '';
    $db_name     = 'yalladrive';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
		   
		   ?>