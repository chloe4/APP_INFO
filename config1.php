<?php
	

// On vérifie si le support MySql est bien disponible
if (!function_exists("mysql_connect"))
	die("Le support MySql n'est pas disponible.");
 
//On vérifie les accès à la base de donnée
if (!@mysql_connect("localhost", "identifiant_u", "mot_passe_u")) 
	die('Base de donnée - mysql_connect: ' . mysql_error());
 
// On sélectionnne la base de donnée
mysql_select_db("jsmp") or die('Base de donnée - mysql_select_db: ' . mysql_error());
 
mysql_query("SET NAMES 'UTF8'"); // Si tu travail en UTF-8
 
////////////////////////////////////////////////////
// ICI MON CODE PHP AVEC MES REQUETES...
///////////////////////////////////////////////////
 
mysql_close(); // On ferme la connexion à la base de donnée
?>