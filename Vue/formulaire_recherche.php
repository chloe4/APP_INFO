<!DOCTYPE html>

	<html>

		<?php 
			include('C:\wamp\www\APP_INFO\Modele\recherche_php.php');
	 	?>

		<?php 
			include('simpleuh.php');
	 	?>

		<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
			<center><label for="query"><p>Entrer votre recherche</label>
			<input type="search" name="query" maxlength="100" size ="30" id="query"/></br>

			Rechercher au niveau de :
			<select name="filtre">
			<option value="Site entier">Site entier </option>
			<!--<option value="Blog">Blog </option>
			<option value="Pages">Pages </option>-->
			<input type ="submit" value="Rechercher"></center>
		</form>
		
		<?php 
			echo $resultats;
		?>
		
		<?php 
			include('bandeau_bas.php'); 
		 ?>

	</html>