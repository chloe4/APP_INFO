<?php
session_start();

//print_r($_POST); 
//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["article_a"])&&
		isset($_POST["varietes_a"])&&
		isset($_POST["nb_article_a"])&&
		isset($_POST["prix_a"])&&
		isset($_POST["duree_vie_a"])&&
		
		) {

$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
$request = $db->prepare("INSERT INTO `utilisateur`(`article_a`, `varietes_a`, `nb_article_a`,`prix_a`, `duree_vie_a`) VALUES (:article_a,:varietes_a,:nb_article_a,:prix_a,:duree_vie_a);");
$request->execute(array(
	"article_a" => $_POST["article_a"],
	"varietes_a" => $_POST["varietes_a"],
	"nb_article_a" => $_POST["nb_article_a"],
	"prix_a" => $_POST["prix_a"],
	"duree_vie_a" => $_POST["duree_vie_a"],
));

}

?>