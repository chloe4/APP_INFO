<?php

//Vérification si article, variété, nombre d'articles, prix et durée de vie existe !
	if (isset($_POST["type_a"])&&
		isset($_POST["nom_a"])&&
		isset($_POST["varietes_a"])&&
		isset($_POST["description_a"]))
	{

// On se connecte à la base de données via la fonction PDO
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
		$sql = "INSERT INTO `jsmp`.`articles` (`type_a`,`nom_a`,`varietes_a`,`description_a`) VALUES (:type_a,:nom_a,:varietes_a,:description_a)";
		$request = $db->prepare($sql);
		$request->execute(array(
			"type_a" => $_POST["type_a"],
			"nom_a" => $_POST["nom_a"],
			"varietes_a" => $_POST["varietes_a"],
			"description_a" => $_POST["description_a"],
		));

		echo "<h3>Votre produit a bien été enregistré.</h3>";
	}
?>