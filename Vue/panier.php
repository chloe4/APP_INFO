<?php session_start() ?>

	<!DOCTYPE html>

	<?php 
		include('simpleuh.php');
		include('C:\wamp\www\APP_INFO\Controleur\fonctions_panier.php');
		include('C:\wamp\www\APP_INFO\Controleur\rafraichissement_panier.php');	
	?>

	<center>
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
		</table></br>

			<?php
				include('C:\wamp\www\APP_INFO\Controleur\tableau_panier.php')
			?>
	
		
	<form method="post" action="Liste_produits.php"/><input type ="submit" value="Continuer mes achats"/>
			<form method="post" action="panier.php"/><input type ="submit" value="Acheter"/>
			<form method="post" action="panier.php"/><input type ="submit" value="Echanger"/>
	</center>


	<?php 
		include('bandeau_bas.php'); 
	 ?>

</html>
