<?php 
		if(isset($_SESSION["identifiant_u"])){
			echo "<h3>Bonjour ".$_SESSION['identifiant_u']."</h3>";
            echo '</br>';
            // On affiche un lien pour fermer notre session
            echo '<a href="APP_INFO\Modele\deconnexion.php">Déconnexion</a>';
		}
	?>