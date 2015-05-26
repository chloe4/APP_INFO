<?php session_start(); ?>
<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php'); 
		?>

		<?php
 			$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
	        $sql = "SELECT * FROM ligne_offre";
	        // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	        // Du coup "query" directement
	        $request = $db->query($sql);

	        // On rentre ces données dans un tableau
	        $request->execute(array("Articles_reference_a", "quantite_stock_lo", "prix_unitaire_lo"));
 			while ($tableau = $request->fetch()){
 				$ref = $tableau['Articles_reference_a'];
 				$quantite = $tableau['quantite_stock_lo'];
 				$prix = $tableau['prix_unitaire_lo'];
        		echo $ref;
        		echo $quantite;
        		echo $prix;
        	}
		?>
	
				<?php 
				include('bandeau_bas.php'); 
	 		?>
</html>