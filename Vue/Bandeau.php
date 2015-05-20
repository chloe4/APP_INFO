<?php session_start() ?>
<!DOCTYPE html>
	
	<html>

		<?php include('C:\wamp\www\APP_INFO\Vue\simpleuh.php'); ?>
		
			<table border="1px"><!-- tableau taille 3*3 avec des images -->	
				<thead>
					<th colspan="3"><p><em><strong> Selections du moment </strong></em></p></th>
				</thead>
				
				<tbody> 
					<tr>
						<td><a href="pomme(saison).html"/><img src="pomme.jpg"/></td>
						<td><a href="carotte(saison).html"/><img src="carottes.jpg"/></a></td>
						<td><a href="noix(saison).html"/><img src="noix.jpg"/></td>
					</tr>
					<tr>
						<td><a href="Poire.html"/><img src="poire.jpg"/></td>
						<td><a href="poireau(saison).html"/><img src="poireaux.jpg"/></td>
						<td><a href="pommedeterre(saison).html"/><img src="patate.jpg"/></td>
					</tr>
					<tr>
						<td><a href="banane(saison).html"/><img src="banane.png"/></td>
						<td><a href="salade(saison).html"/><img src="salade.jpg"/></td>
						<td><a href="amande(saison).html"/><img src="amande.jpg"/></td>
					</tr>
				</tbody>
			</table>

			<?php include('bandeau_bas.php'); ?>
	 		
	</html>