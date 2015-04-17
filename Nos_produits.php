<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php'); 
		?>

		<?php
 			$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
	        $sql = "SELECT `article_a` FROM `jsmp`.`catalogue_articles` WHERE classe_a = 1";
	        // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	        // Du coup "query" directement
	        $request = $db->query($sql);

	        // On rentre ces données dans un tableau
	        $request->execute(array("article_a"));

 			$tableau = $request->fetch();
        	echo $tableau["article_a"].;

		?>

<div id="liste2" >
	

	<ol>
		<li>
			<h4>Fruits </h4>
			<ul>

			
			<li><a href="http://localhost/APP_INFO/pomme(saison).html#">Pomme</a></li>
			<li><a href="http://localhost/APP_INFO/banane(saison).html#">Banane</a></li>
			<li><a href="#">Cerise</a></li>
			<li><a href="#">Fraise</a></li>	
			<li><a href="#">Framboise</a></li>
			<li><a href="#">Kiwi</a></li>	
			<li><a href="#">Litchi</a></li>	
			<li><a href="#">Noisette</a></li>
			<li><a href="http://localhost/APP_INFO/noix(saison).html#">Noix</a></li>	
			<li><a href="#">Noix de cajou</a></li>
			<li><a href="http://localhost/APP_INFO/amande(saison).html#">Pistache</a></li>
			<li><a href="http://localhost/APP_INFO/Poire.html#">Poire</a></li>	
			
		</ul>
		</li>

		<li>
			<h4>Aromes Fraiches</h4>
						<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/ail.html">Ail</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/e%CC%81chalotte.html">Echalotte</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/oseil.html">Oseil</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/persil.html">Persil</a></li>	
				
			
		</ul>
		</li> 

		<li>
			<h4>Champignons</h4>
						<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/ce%CC%80pe.html">Cèpe</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/champignondeparis.html">Champignon de Paris</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/morille.html">Morille</a></li>
		
			
		</ul>
					</li>
			<li>
			<h4></h4>
						<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/brocoli.html">Brocoli</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/chou-fleur.html">Chou-fleur</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/chou-pomme%CC%81.html">Chou-pommé</a></li>
		
			
		</ul>
					</li>

		<li>
			<h4>Courges</h4>
							<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/courgette.html">Courgette</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/potiron.html">Potiron</a></li>
		
			
		</ul>
		</li> 

		<li>
			<h4>Haricots, pois, légumes secs, graines germées </h4>
								<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/fe%CC%80ve.html">Fève</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/haricotsverts.html">Haricot vert</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/lentille.html">Lentille</a></li>
		    <li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/petitspois.html">Petit pois</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/poisgourmands.html">Pois gourmant</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/soja.html">Soja</a></li>
			
		</ul>
		</li> 
		<li>
			<h4>Légumes feuille </h4>
										<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/artichaud.html">Artichaut</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/epinard.html">Epinard</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/celerirave.html">Celeri Branche</a></li>
		    <li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/fenouil.html">Fenouil</a></li>
			<li><a href="http://localhost/APP_INFO/poireau(saison).html#">Poireau</a></li>
			
			
		</ul>
		</li> 
		<li><h4>Légumes fruits</h4>
								<ul>

			
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/comcombre.html">Concombre</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/poivron.html">Poivron</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/tomate.html">Tomate</a></li>

			
		</ul>
		</li> 
		<li><h4>Légumes racines & tubercules</h4>
									<ul>

			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/asperge.html">Asperge</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/betterave.html">Betterave</a></li>
			<li><a href="http://localhost/APP_INFO/carotte(saison).html#">Carotte</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/celerirave.html">Céleri rave</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/navet.html">Navet</a></li>
		    <li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/oignon.html">Oignon</a></li>
	        <li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/panais.html">Panais</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/radis.html">Radis</a></li>
					
			
		</ul>
		</li> 
			<li><h4>Légumes exotiques</h4>
									<ul>

			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/Patatedouce.html">Patate douce</a></li>
			<li><a href="http://localhost/APP_INFO/pommedeterre(saison).html#">Pomme de terre</a></li>
	
			
		</ul>
			<li><h4>Salades</h4>
									<ul>

			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/Chicore%CC%81e.html">Chicorée</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/Cresson.html">Cresson</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/Endive.html">Endive</a></li>
			<li><a href="http://localhost/APP_INFO/salade(saison).html#">Laitue</a></li>
			<li><a href="file:///Users/caroline/Desktop/Dossier%20APP%20informatique%20/APP_INFO/Mache.html">Mache</a></li>			
			
		</ul>
		</li> 
		</li> 
</ol>

</div>
	
				<div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
				
				<p><a href="mentionslegales.html">- Mentions Legales - </p>		
			</div>



</body>
</html>