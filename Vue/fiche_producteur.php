<?php session_start() ?>

<!DOCTYPE html>
	<html>

		<?php 
			include('simpleuh.php');
			include('C:\wamp\www\APP_INFO\Modele\fiche_producteur_php.php') 
		 ?>
        
		<center>
			<h1><?php echo $prenom."  ".$nom; ?> </h1>
		</center>
			
<center><img id="producteur" src ="Images_Deco/profil.jpg"/></center>
<p>Bonjour</p>
<p>Producteur depuis mon plus jeune âge, je m'occupe de tous les fruits et légumes que je cultive : <br> </p>

<p>Mes produits</p></br>
<img src="enveloppe.png"/>
<p>Me contacter par mail : <?php echo "<a href=\"www.gmail.com/intl/fr/mail/help/about.html#inbox\">".$email."</a>"; ?> </p>

	<?php include('bandeau_bas.php'); ?>
 
</html>
