<?php
 	include('C:\wamp\www\APP_INFO\Modele\connect_db.php');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM offre";
	// Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	// Du coup "query" directement
	$request = $db->query($sql);

	// On rentre ces données dans un tableau
    $request->execute(array("identifiant_u", "nom_a", "quantite_intiale_lo", "prix_unitaire_lo"));
 	while ($tableau = $request->fetch()){
 		$ref = $tableau['identifiant_u'];
 		$nom = $tableau['nom_a'];
 		$quantite = $tableau['quantite_initiale_lo'];
		$prix = $tableau['prix_unitaire_lo'];		
   	}
			
	$sqldem = "INSERT INTO demande (`nom_a`,`identifiant_u`,`montant_d`,`quantite_d`) VALUES ('".$nom."','".$ref."','".$prix."','".$quantite."')";
	$requestdem = $db->prepare($sqldem);
	$requestdem->execute(array(
		'nom_a' =>$nom,
		'identifiant_u' => $ref,
		'montant_d'=> $quantite, 
		'quantite_d'=>$prix
	));

?>