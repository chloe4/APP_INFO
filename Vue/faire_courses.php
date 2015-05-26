<?php session_start(); ?>

	<!DOCTYPE html>

	<html>
		<?php include('C:\wamp\www\APP_INFO\Modele\redirection.php'); ?>
		<?php include('simpleuh.php'); ?>
		
		<section id="mesproducteursfavoris">
		<h1> Localisez vous </h1>
		<div>
			<h4> Mes producteurs favoris </h4>
			<ul id="prod"> 
				<li> <a href ="ProdCaroline.php"> Caroline Nopper </a></li>
				<li> <a href ="ProdAlice.php"> Alice Samaran </a></li>
				<li> <a href ="ProdCome.php"> Côme Schechter </a></li>
				<li> <a href ="ProdXavier.php"> Xavier Gouesnard </a></li>
				<li> <a href ="ProdChloé.php"> Chloé Van Cauwenberghe </a></li>
			</ul>
		</div>
		</section>

		<div id="mesproducteursfavoris">
			<?php
	 			$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
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
		</div>


		<?php include('bandeau_bas.php'); ?>
		
	</html>