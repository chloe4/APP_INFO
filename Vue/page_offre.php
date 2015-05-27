<?php session_start(); ?>
<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php'); 
		?>
<h1>Mes offres</h1>
		<?php
 			$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
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
        		echo "Utilisateur : ".$ref."    ------    ";

        		echo "Produit : ".$nom."    ------    ";
        		echo "Quantité : ".$quantite."    ------    ";
        		echo "Prix unitaire : ".$prix."";
        		echo "</br>";
        	}
		?>
	</br>
				<?php 
				include('bandeau_bas.php'); 
	 		?>
</html>