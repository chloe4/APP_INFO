<?php

//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_a"])&&
		isset($_POST["varietes_a"])&&
		isset($_POST["quantite_initiale_lo"])&&
		isset($_POST["prix_unitaire_lo"])
		)
	{
		$quantite = $_POST["quantite_initiale_lo"];
		$prix = $_POST["prix_unitaire_lo"];
		// On se connecte à la base de données via la fonction PDO
		include('connect_db.php');
		$id = $_SESSION['identifiant_u'];

		$sqlprod = "SELECT reference_a FROM articles WHERE nom_a = :nom_a";
		$requestprod = $db->prepare($sqlprod);
        $requestprod->execute(array("reference_a"=>""));
        $tableau = $requestprod->fetch();
        $ref = $tableau["reference_a"];
        echo $ref;


		$sql = "INSERT INTO `jsmp`.`offre` (`identifiant_u`, `quantite_initiale_lo`, `prix_unitaire_lo`,`reference_a`) VALUES ('$id', :quantite_initiale_lo, :prix_unitaire_lo, '$ref')";
		$request = $db->prepare($sql);
		$request->execute(array(
			'identifiant_u' => $id,
			'quantite_initiale_lo' => $quantite,
			'prix_unitaire_lo' => $prix,
			'reference_a' => $ref
		));

			echo "<h1>Votre offre a bien été enregistrée.</h1>";
             echo $ref;
    }

	

?>