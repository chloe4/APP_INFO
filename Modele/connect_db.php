<?php

// connexion à la BD
try{
	$db=new PDO("mysql:host=localhost;dbname=jsmp","root","");
}
catch(PDOExeption $e){
	die('Erreur:'.$e->getMessage());
}
?>
