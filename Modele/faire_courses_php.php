<?php include('connect_db.php'); ?>
<?php
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
	$sql = "SELECT * FROM utilisateur";
    // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
    // Du coup "query" directement
    $request = $db->query($sql);
    // On rentre ces données dans un tableau
    $request->execute(array("nom_u", "prenom_u"));
 	while ($tableau = $request->fetch()){
		$id = $tableau['nom_u'];
		echo "<a href=\"fiche_producteur.php?id=$id\">".$tableau["prenom_u"]." ".$tableau["nom_u"]."</br>";
	}
?>