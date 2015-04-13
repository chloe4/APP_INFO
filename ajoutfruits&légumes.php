<!DOCTYPE html><!--page d'accueil-->


	<html>
		

		<head>
			<link type="text/css" rel="stylesheet" href="Bandeaucss.css"/>
			<title> Jamais sans ma pomme </title> <!-- titre de l'onglet de la page -->
			<meta charset="utf-8"/>
		</head>


		<body>
		<body background="http://images.forwallpaper.com/files/thumbs/preview/20/207943__texture-timber-lumber-wood-close-up_p.jpg"/><!-- fond d'écran-->


<<?php 
echo "bonjour $_POST["identifiant_u"]";

 ?>


			<ul id="menu">
	<li><a href="http://localhost/APP_INFO/Bandeau.html">Accueil</a>
		
	</li>
	<li><a href="http://www.mangerbouger.fr/IMG/pdf/inpes_manger_bouger_pdf_produits_saison.pdf">Calendrier</a>
		
	</li>
	<li><a href="#">Acheter/Echanger</a>
		<ul>
			
			<li><a href="http://localhost/APP_INFO/fairemescourses.html#">Nos producteurs</a></li>
			<li><a href="http://localhost/APP_INFO/Nos_produits.html#">Nos produits</a></li>		
		</ul>
		
	</li><li><a href="#">Des infos !</a>
		<ul>
			
			<li><a href="http://localhost/APP_INFO/Qui_somme_nous.html#">Qui sommes-nous</a></li>
			<li><a href="http://localhost/APP_INFO/Contact.html#">Contact</a></li>		
		</ul>
	</li><li><a href="#">Mon panier</a>
		<ul>
			<li><a href="#">En cours</a></li>
			<li><a href="#">Avant</a></li>	
		</ul>
	</li>
	</li><li><a href="#">Rechercher</a>	
	</li>
	</li><li><a href="http://localhost/APP_INFO/recherche.php#">Nous rejoindre !</a>
		<ul>
			<li><a href="http://localhost/APP_INFO/formulaire_inscription.php#">S'inscire</a></li>
			<li><a href="http://localhost/APP_INFO/formulaire_connexion.php#">Se connecter</a></li>			
		</ul>
	</li>
</ul>
				<h2>Jamais sans ma pomme </h2> <!-- titres de la page dans la bande-->
				<h3>So fresh , so French! </h3>

				
		
			</div>
		

			<form action="" class="formulaire"> <!--barre de recherche -->
			
				<label for="monchampderecherche"><p style="font-family:across the stars">Recherche Fruits & Legumes</p></label> <input id="monchampderecherche" class="champ" type="text" value="Search...)"/>
				<input class="bouton" type="button" value=" " />
		
			</form>
		

			<table border="1px"><!-- tableau taille 3*3 avec des images -->
		
				<thead>
					<th colspan="3"> <p style="font-size:30px; font-family:across the stars;color:#FF140C"><em><strong> Selections du moment </strong></em></p>
					</th>
				</thead>
			
				<tbody>
					<tr> 
						<td><img src="pomme.jpg"/></td>
						<td><img src="carottes.jpg"/></a></td>
						<td><img src="noix.jpg"/></td>
					</tr>
					<tr> 
						<td><a href="poire.html"/><img src="poire.jpg"/></td>
						<td><img src="poireaux.jpg"/></td>
						<td><img src="patate.jpg"/></td>
					</tr>
					<tr>
						<td><img src="banane.png"/></td>
						<td><img src="salade.jpg"/></td>
						<td><img src="amande.jpg"/></td>
					</tr>
				</tbody>
			
			</table>


			<div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
			<p><a href="mentionslegales.html">- Mentions Legales - </p>	
			</div>
		

		</body>
	

	</html>