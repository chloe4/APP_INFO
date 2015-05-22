<?php session_start() ?>

<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php');
		 	include('C:\wamp\www\APP_INFO\Modele\fiche_producteur_php.php') 
		 ?>

		
        
		<center>
			<h1><?php echo $nom; ?> </h1>
		</center>
			
			<h3> Producteur : Chloé C.  </h3>
<center><img id="producteur" src ="http://fr.web.img5.acsta.net/medias/nmedia/18/63/18/02/18757972.jpg"/></center>
<p style="color:black;font-family: 'Satisfy', cursive;"> Bonjour, <br> productrice depuis mon plus jeune âge, je m'occupe de tous les fruits et légumes que je cultive : <br> </p>

<ul id="description">
    <li style="color:black;font-family: 'Satisfy', cursive;"> des carottes</li>
	<li style="color:black;font-family: 'Satisfy', cursive;"> des pommes</li>
	<li style="color:black;font-family: 'Satisfy', cursive;"> des courgettes</li>
</ul>

 <a href="Acheter_Echanger.php"/><p style="font-family: 'Satisfy', cursive;"/>Faire mes courses

	<?php 
				include('bandeau_bas.php'); 
	 		?>



</html>
