<!DOCTYPE html><!--page d'accueil-->


	<html>
		

		<head>
			<link type="text/css" rel="stylesheet" href="page_css.css"/>
			<title> Jamais sans ma pomme </title> <!-- titre de l'onglet de la page -->
			<meta charset="utf-8"/>
		</head>


		<body>
		<body background="http://images.forwallpaper.com/files/thumbs/preview/20/207943__texture-timber-lumber-wood-close-up_p.jpg"/><!-- fond d'écran-->


<<?php 
echo "bonjour";

 ?>


			<div id="header"> <!--Barre en haut du site -->
				<div id="button"> <p style="color:#FF140C; font-size :16px">Se connecter </p> </div >
				<div id="button"> <p style="color:#FF140C; font-size:16px"><a href="inscription.php">S'inscrire</a></p> </div >
				<div id="button"> <p style="color:#FF140C; font-size:16px">Mon panier </p> </div >
		
				<h2>Jamais sans ma pomme </h2> <!-- titres de la page dans la bande-->
				<h3>So fresh , so French! </h3>

				
		
			</div>
		
			<div id="barre">
				<div id="liste"> <!--liste à gauche / une sorte de menu général-->
					<ul>
						<li>Accueil</li>
						<li>Fruits & Legumes</li>
						<li><a title="fruits et légumes" href="http://www.fruits-legumes.org/">Le calendrier des fruits et legumes</a></li>
						<li>Forum</li>
						<li>Qui sommes-nous ?</li>
					</ul>
				</div>
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
				<p><a href="file:///C:/wamp/www/jsmp/Contact.html">- Contact -</a> </p>
				<p>Mentions Legales - </p>
				<p>Aide - </p>
			</div>
		

		</body>
	

	</html>