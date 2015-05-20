<?php 
		if(!$_SESSION["identifiant_u"]){
			header('location: formulaire_connexion.php');
			exit;
		}
	?>