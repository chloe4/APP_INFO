<?php session_start() ?>
<!DOCTYPE html><!--page de contact-->

	<html>

		<?php 
			include('simpleuh.php'); 
	 	?>

		<div id="barre1">
			<center><p><!--phrase -->
				<strong>Une question, une remarque ? Contactez-nous !</br>
				Afin de mieux vous guider merci de choisir une rubrique ci-dessous.</strong></p>
			</center>
		</div>
			
		<div><!--les images cliquables-->
			<center>
				<p>Vous pouvez nous contacter par mail </p>
				<a href="email.php"><img src="Images_Deco/enveloppe.png"/></a>
			<p> OU BIEN </p>
			<p>Vous pouvez nous contacter en nous appelant</p>	<img src="Images_Deco/telephone.jpg"/>
		</center>
		</div>
			
		<?php 
			include('bandeau_bas.php'); 
	 	?>

	</html>
