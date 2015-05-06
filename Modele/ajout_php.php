<?php
session_start();

//Vérification si article, variété, nombre d'articles, prix et durée de vie existe !
	if (isset($_POST["article_a"])&&
		isset($_POST["varietes_a"])
	{

// On se connecte à la base de données via la fonction PDO
$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");

$request = $db->prepare("INSERT INTO `Articles`(`article_a`, `varietes_a`) VALUES (:article_a,:varietes_a;");
$request->execute(array(
	"article_a" => $_POST["article_a"],
	"varietes_a" => $_POST["varietes_a"],
));

}
else {
	echo "Zut";
}

?>