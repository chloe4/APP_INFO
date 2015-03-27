<?php

// connexion à la BD
try{
	$db=new PDO('mysql:host=localhost;dbname=tp_search','root','');
}
catch(PDOExeption $e){
	die('Erreur:'.$e->getMessage());
}
?>
