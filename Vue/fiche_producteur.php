<?php session_start() ?>
	<!DOCTYPE html>
		<html>

			<?php 
				include('simpleuh.php');
				include('C:\wamp\www\APP_INFO\Modele\fiche_producteur_php.php') ;
			?>
	        
			<center><h1><?php echo $prenom."  ".$nom; ?> </h1></center>			
			<center><img id="producteur" src ="Images_Deco/profil.jpg"/></center>

			<?php 
	    		echo "<p>Bonjour, je m'appelle " .$prenom."  ".$nom. " et j'habite à ".$localisation. ".</br>";
	    		echo "Vous pouvez me joindre sur mon téléphone : 0".$telephone. "</p>" ;
			?>
			<p><?php echo "<a href=\"page_offre.php?id=$identifiant\">Mes offres</a></br>"; ?></p>
	
			<img src="Images_Deco/enveloppe.png"/>
			<p>Me contacter par mail : 
				<?php echo "<a href=\"www.gmail.com/intl/fr/mail/help/about.html#inbox\">".$email."</a>"; ?> 
			</p></br>

			<?php
				if(isset($_SESSION['identifiant_u'])){
					if ($_SESSION['identifiant_u'] == $identifiant){
						echo "<p><a href =\"page_faire_offre.php\"/>Faire une offre</a></p>";
						echo "<p><a href =\"membre_description.php\"/>Modifier mon profil</a></p></br>";
						if($type == "2"){
							echo "<p><a href =\"administrateur.php\"/>Gestion du site</a></p>";
						}
					}
				}
				//taimzou<3
			?>

			<?php include('bandeau_bas.php'); ?>
	 
		</html>
