<?php

//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_a"])&&
		isset($_POST["varietes_a"])&&
		isset($_POST["quantite_initiale_lo"])&&
		isset($_POST["prix_unitaire_lo"])
		)
	{
		// On se connecte à la base de données via la fonction PDO
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","root");
		$id = $_SESSION['identifiant_u'];

		$sqlprod = "SELECT reference_a FROM articles WHERE nom_a = :nom_a AND varietes_a = :varietes_a";
		$requestprod = $db->prepare($sqlprod);
        $requestprod->execute(array("reference_a"=>""));
        $tableau = $requestprod->fetch();
        $ref = $tableau["reference_a"];


		$sql = "INSERT INTO `jsmp`.`offre` (`identifiant_u`, `quantite_initiale_lo`, `prix_unitaire_lo`,`reference_a`) VALUES ('$id', :quantite_initiale_lo, :prix_unitaire_lo, '$ref')";
		$request = $db->prepare($sql);
		$request->execute(array(
			"identifiant_u" => $id,
			"quantite_initiale_lo" => $_POST["quantite_initiale_lo"],
			"prix_unitaire_lo" => $_POST["prix_unitaire_lo"],
			"reference_a" => $ref,
		));

			echo "<h3>Votre offre a bien été enregistrée.</h3>";
            echo '</br>';
    }

	

?>