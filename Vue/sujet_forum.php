<?php session_start(); ?>
<!DOCTYPE html>
	<html>

		<?php include('simpleuh.php'); ?>

<?php include('C:\wamp\www\APP_INFO\Modele\sujet_forum_php.php');?>

		
		<h1>Forum</h1>
 <?php 
                echo "<p>Sujet " .$commentaire." de ".$identifiant. ".</br>";
               
            ?>


			<?php include('bandeau_bas.php'); ?>
	</html>