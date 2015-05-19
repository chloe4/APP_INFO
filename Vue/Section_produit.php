<?php session_start() ?>

<!DOCTYPE html>
	<html>

		<?php include('simpleuh.php');?>

		<?php include('C:\wamp\www\APP_INFO\Modele\section_produit_php.php')
			
		?>

		
        
		<center>
			<h1><?php echo $nom; ?> </h1>
			<img src="<?php echo $photo;?>">
		</center>
		<p><?php echo $description;?></p>
		<div id="barre2" style="margin-left: 220px">
			<div id="liste2" > <!--liste pour énumérer les qualif du produit-->
		 		<ul>
			    	<li><strong>Origine</strong>:
						<br>Consommé depuis des millénaires, l’ail est un condiment très apprécié qui fait depuis longtemps partie de la tradition culinaire française. Sa culture, très simple, ne demande pas d’attention particulière et les espèces produites en France proposent un large éventail de goûts. </br></li>
					<li><strong>Vertus</strong> :
					<br>En cuisine, ce condiment relève et sublime les saveurs, tout en participant à votre bien-être grâce à ses atouts nutritionnels. </br></li>
				</ul>
			</div>
		</div>

		<center><a href="Acheter_Echanger.php"><input type ="submit" value="Sélectionner"></a>
		</center>

		
		<?php 
			include('bandeau_bas.php'); 
 		?>

	</html>
