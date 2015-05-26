<!--En tête de chaque page-->
		<head>
			<link type="text/css" rel="stylesheet" href="Bandeaucss.css" media="all" />
			<title> Jamais sans ma pomme </title>
			<meta charset="utf-8" />
			<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'><!--lien pour écriture satisfy/open source de google-->
		</head>


		<body id="fond"/>
			<div id="container">
			<header>
				<div id="logo">
					<a href="Bandeau.php"><img id="logo2"src="Logo.png"></a>
				</div>
		<nav>
			<ul id="menu">
				<li><a href="Bandeau.php">Accueil</a></li>
				<li><a href="formulaire_recherche.php">Rechercher</a></li>
				<li><a href="http://www.mangerbouger.fr/IMG/pdf/inpes_manger_bouger_pdf_produits_saison.pdf">Calendrier</a></li>
				<li><a href="#">Acheter/Echanger</a>
					<ul>
						<li><a href="faire_courses.php">Nos producteurs</a></li>
						<li><a href="Liste_produits.php">Nos produits</a></li>		
					</ul>
				</li>
				<li><a href="panier.php">Mon panier</a>
			
				<li><a href="formulaire_inscription.php">S'inscrire</a>

				</li>
				<li><a href="#"><?php include('C:\wamp\www\APP_INFO\Modele\si_la_personne_est_connectee.php'); ?>Se connecter</a>
					<ul>
						<li><a href="panier.php">Remplir le panier</a></li>
						<li><a href="#">Etat de mon panier</a></li>	
					</ul>
				</li>

				</li> 
				
				<?php include('C:\wamp\www\APP_INFO\Modele\si_la_personne_est_connectee.php'); ?>

			</ul>
		</nav>



							
			<h2><img src="Images_Deco/Logo.png"/></h2>
			
</header>