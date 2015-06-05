<?php session_start(); ?>
<!DOCTYPE html>
	<html>

		<?php include('simpleuh.php'); ?>
		
		<h1>Liste des produits</h1>
		<section>
			<?php include('..\Modele\Liste_produits_php.php'); ?>
			<p><a href="formulaire_ajout.php">Ajouter un produit</a></p> 
		</section>
		<?php include('bandeau_bas.php'); ?>
		
	</html>