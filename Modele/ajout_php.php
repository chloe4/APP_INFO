<?php

//Vérification si article, variété, nombre d'articles, prix et durée de vie existe !
	if (isset($_POST["nom_a"])&&
		isset($_POST["description_a"]))
	{

// On se connecte à la base de données via la fonction PDO
		include('connect_db.php');
		$sql = "INSERT INTO `jsmp`.`articles` (`nom_a`,`description_a`) VALUES (:nom_a,:description_a)";
		$request = $db->prepare($sql);
		$request->execute(array(
			"nom_a" => $_POST["nom_a"],
			"description_a" => $_POST["description_a"],
		));

		echo "<h1>Votre produit a bien été enregistré.</h1>";
	}
?>