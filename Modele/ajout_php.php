<?php
session_start();

//Vérification si article, variété, nombre d'articles, prix et durée de vie existe !
	if (isset($_POST["article_a"])&&
		isset($_POST["varietes_a"])
	{

// On se connecte à la base de données via la fonction PDO
$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");

$request = $db->prepare("INSERT INTO `Catalogue_Articles`(`article_a`, `varietes_a`, `nb_article_a`,`prix_a`, `duree_vie_a`,`commentaires_a`) VALUES (:article_a,:varietes_a,:nb_article_a,:prix_a,:duree_vie_a,:commentaires_a);");
$request->execute(array(
	"article_a" => $_POST["article_a"],
	"varietes_a" => $_POST["varietes_a"],
	"nb_article_a" => $_POST["nb_article_a"],
	"prix_a" => $_POST["prix_a"],
	"duree_vie_a" => $_POST["duree_vie_a"],
	"commentaires_a" => $_POST["commentaires_a"]
));

}

?>