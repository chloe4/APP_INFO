
<?php session_start() ?>

<DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php');
		 	include('C:\wamp\www\APP_INFO\Modele\section_produit_php.php') 
		?>

		<center>
			<h1><?php echo $nom; ?> </h1>
			<img src="<?php echo $photo; ?>">
		</center>
		<p><?php echo $description;?></p>

		<center><a href="Acheter_Echanger.php">
			<input type ="submit" value="Sélectionner"></a>
		</center>
	
		<?php include('bandeau_bas.php'); ?>

	</html>
