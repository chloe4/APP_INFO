<?php session_start() ?>

	<!DOCTYPE html>

	<?php 
		include('simpleuh.php');
		include('C:\wamp\www\APP_INFO\Controleur\fonctions_panier.php');
		include('C:\wamp\www\APP_INFO\Controleur\rafraichissement_panier.php');	
	?>

	<form method="post" action="panier.php">
		<table style="width: 400px">
			<tr>
				<td colspan="4">Votre panier</td>
			</tr>
			<tr>
				<td>Libellé</td>
				<td>Quantité</td>
				<td>Prix Unitaire</td>
				<td>Action</td>
			</tr>

			<?php
				include('C:\wamp\www\APP_INFO\Controleur\tableau_panier.php')
			?>

		</table>
	</form>
		
	<?php 
		include('bandeau_bas.php'); 
	 ?>

</html>
