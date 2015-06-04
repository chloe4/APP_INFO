<?php session_start() ?>
<!DOCTYPE html>

	<html>

		<?php include('simpleuh.php');?>

		<form action=" " method="post">
			<center><label for="query"><p>Entrer votre recherche</label>
			<input type="search" name="query" maxlength="100" size ="30" id="query"/></br>

			
			<!--<select name="filtre">
			<option value="Site entier">Site entier </option>
			<option value="Blog">Blog </option>
			<option value="Pages">Pages </option>-->
			<input type ="submit" value="Rechercher"></center>
		</form></br>

		<?php include('C:\wamp\www\APP_INFO\Modele\recherche_php.php'); ?> </br>
		
		
		<?php include('bandeau_bas.php'); ?>

	</html>