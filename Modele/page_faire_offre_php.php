<?php

//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_a"])&&
		isset($_POST["quantite_initiale_lo"])&&
		isset($_POST["nom_a"])&&
		isset($_POST["prix_unitaire_lo"])
		)
	{
		$quantite = $_POST["quantite_initiale_lo"];
		$prix = $_POST["prix_unitaire_lo"];
		$ref = $_POST["nom_a"];

		// On se connecte à la base de données via la fonction PDO
		include('connect_db.php');
		$id = $_SESSION['identifiant_u'];

		$sql = "INSERT INTO `jsmp`.`offre` (`id_ligne_offre`,`identifiant_u`, `quantite_initiale_lo`, `prix_unitaire_lo`,`nom_a`) VALUES ('','".$id."', '".$quantite."', '".$prix."', '".$ref."')";
		$request = $db->prepare($sql);
		$request->execute(array(
			'identifiant_u' => $id,
			'quantite_initiale_lo' => $quantite,
			'prix_unitaire_lo' => $prix,
			'nom_a' => $ref
		));

			echo "<h1>Votre offre a bien été enregistrée.</h1>";

    }

	

?>