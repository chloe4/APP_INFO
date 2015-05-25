<?php session_start() ?>
<!DOCTYPE html>

	<html>

		<?php include('C:\wamp\www\APP_INFO\Vue\simpleuh.php'); ?>
		
			<table border="1px"><!-- tableau taille 3*3 avec des images -->	
				<thead>
					<th colspan="3"><p><em><strong> Selections du moment </strong></em></p></th>
				</thead>
				
				<center>
				<tbody> 
				
					<tr>
						<td><a href="Images_F_pomme(saison).html"/><img src="Images_F_L/pomme.jpg"/></td>
						<td><a href="carotte(saison).html"/><img src="Images_F_L/carottes.jpg"/></a></td>
						<td><a href="noix(saison).html"/><img src="Images_F_L/noix.jpg"/></td>
					</tr>
					<tr>
						<td><a href="Poire.html"/><img src="Images_F_L/poire.jpg"/></td>
						<td><a href="poireau(saison).html"/><img src="Images_F_L/poireaux.jpg"/></td>
						<td><a href="pommedeterre(saison).html"/><img src="Images_F_L/patate.jpg"/></td>
					</tr>
					<tr>
						<td><a href="banane(saison).html"/><img src="Images_F_L/banane.png"/></td>
						<td><a href="salade(saison).html"/><img src="Images_F_L/salade.jpg"/></td>
						<td><a href="amande(saison).html"/><img src="Images_F_L/amande.jpg"/></td>
					</tr>
				
				</tbody>
			</center>
			</table>

			<?php include('bandeau_bas.php'); ?>
	 		
	</html>