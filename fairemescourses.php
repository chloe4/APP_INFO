<!DOCTYPE html>
<html>

<?php 
	include('simpleuh.php'); 
	 ?>
	



<h1 style="font-size:30px; font-family:across the stars;color:#FF140C"> Localisez vous </h1>

<div id="mesproducteursfavoris">
	<h5 style="font-size:20px; font-family:across the stars;color:#FF140C"> Mes producteurs favoris </h5>
<ul style="font-size:15px; font-family:across the stars;color:#FF140C"> 
	<li> <a href ="http://localhost/APP_INFO/ProdCaroline.html"> Caroline Nopper </a></li>
	<li> <a href ="http://localhost/APP_INFO/ProdAlice.html"> Alice Samaran </a></li>
	<li> <a href ="http://localhost/APP_INFO/ProdCome.html"> Côme Schechter </a></li>
	<li> <a href ="http://localhost/APP_INFO/ProdXavier.html"> Xavier Gouesnard </a></li>
	<li> <a href ="http://localhost/APP_INFO/ProdChloé.html"> Chloé Van Cauwenberghe </a></li>
</ul>

	</div>
	
	<?php
$mapChemin = 'map/france_map_3.0/'; // Chemin du dossier FranceMap relatif au ficher dans lequel vous faites l'include
		
$urlExec = $_SERVER['PHP_SELF'];
include($mapChemin.'map.php');
?>
	<div id="footer">
				
				 <p><a href="mentionslegales.html">- Mentions Legales - </p>	
				
			
			
			
		</div>


</body>
</html>