<?php session_start(); ?>

	<!DOCTYPE html>

	<html>
		<?php include('C:\wamp\www\APP_INFO\Modele\redirection.php'); ?>
		<?php include('simpleuh.php'); ?>
		
		<section id="mesproducteursfavoris">
			<h1> <a href="C:/wamp/www/APP_INFO/Vue/carte.html"> Localisez vous </a></h1>
			<div>
				<h4> Liste des producteurs </h4>
				<ul id="prod"> 	
					<?php include('C:\wamp\www\APP_INFO\Modele\liste_producteurs_php.php'); ?>
				</ul>
			</div>
		</section>

		<?php include('bandeau_bas.php'); ?>
		
	</html>