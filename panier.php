<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

		<head>
			<body>
			<link type="text/css" rel="stylesheet" href="Bandeaucss.css"/>
			<title> Jamais sans ma pomme </title> <!-- titre de l'onglet de la page -->
			<meta charset="utf-8"/>
		</head>

		
<body>
			<body id="fond"/>
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
			<li><a href="http://localhost/APP_INFO/panier.php">En cours</a></li>
			<li><a href="#">Avant</a></li>	
		</ul>
	</li>
	</li><li><a href="http://localhost/APP_INFO/recherche.php#">Rechercher</a>	
	</li>
	</li><li><a href="#">Nous rejoindre !</a>
		<ul>
			<li><a href="http://localhost/APP_INFO/formulaire_inscription.php#">S'inscire</a></li>
			<li><a href="http://localhost/APP_INFO/formulaire_connexion.php#">Se connecter</a></li>			
		</ul>
	</li>
</ul>
<h2>Jamais sans ma pomme </h2> <!-- titres de la page dans la bande-->
			<h3>So fresh , so French! </h3>
	

		<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>



<form method="post" action="panier.php">
<table style="width: 400px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr style="font-family:across the stars;color:white">
		<td>Libellé</td>
		<td>Quantité</td>
		<td>Prix Unitaire</td>
		<td>Action</td>
	</tr>


	<?php
	if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   if ($nbArticles <= 0)
	   echo "<tr><td>Votre panier est vide </ td></tr>";
	   else
	   {
	      for ($i=0 ;$i < $nbArticles ; $i++)
	      {
	         echo "<tr>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
	         echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
	         echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
	         echo "</tr>";
	      }

	      echo "<tr><td colspan=\"2\"> </td>";
	      echo "<td colspan=\"2\">";
	      echo "Total : ".MontantGlobal();
	      echo "</td></tr>";

	      echo "<tr><td colspan=\"4\">";
	      echo "<input type=\"submit\" value=\"Rafraichir\"/>";
	      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

	      echo "</td></tr>";
	   }
	}
	?>
</table>
</form>
		<div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
				
				<p><a href="mentionslegales.html">- Mentions Legales - </p>		
			</div>



</body>
</html>
