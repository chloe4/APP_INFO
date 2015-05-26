<?php session_start(); ?>

	<!DOCTYPE html>

	<html>
		<?php include('C:\wamp\www\APP_INFO\Modele\redirection.php'); ?>
		<?php include('simpleuh.php'); ?>
		
		<section id="mesproducteursfavoris">
			<h1> Localisez vous </h1>
			<div>
				<h4> Liste des producteurs </h4>
				<ul id="prod"> 	
					<?php include('C:\wamp\www\APP_INFO\Modele\faire_courses_php.php'); ?>
				</ul>
			</div>
		</section>

		<?php include('bandeau_bas.php'); ?>
		
	</html>