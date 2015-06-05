<?php
	include('connect_db.php'); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
    $sql = "SELECT * FROM articles ORDER BY nom_a DESC LIMIT 4";
	// Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
    // Du coup "query" directement
    $request = $db->query($sql);

    // On rentre ces données dans un tableau
    $request->execute(array("nom_a", "photo_a"));
 	while ($tableau = $request->fetch()){
 		$id = $tableau['nom_a'];
    $photo =$tableau['photo_a'];
  }
      echo "<h1>Les dernières nouveautés :</h1>";
      echo '<a href=\'Section_produit.php?id='.$id.'\'><img src="../Vue/'.$photo.'"></a></br>'; 	
?>