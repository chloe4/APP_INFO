<?php session_start(); ?>
<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php'); 
		 	include('C:\wamp\www\APP_INFO\Modele\connect_db.php') ?>
		<?php
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
	        $sql = "SELECT * FROM articles";
	        // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	        // Du coup "query" directement
	        $request = $db->query($sql);

	        // On rentre ces données dans un tableau
	        $request->execute(array("nom_a"));
 			while ($tableau = $request->fetch()){
 				$id = $tableau['nom_a'];
        		echo "<a href=\"Section_produit.php?id=$id\">".$tableau["nom_a"]."</br>";
        	}
		?>

		<p><a href="formulaire_ajout.php">Ajouter un produit</p> 
	
		<?php include('bandeau_bas.php'); ?>
	</html>