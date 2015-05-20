<?php 
		if(isset($_SESSION["identifiant_u"])){
			echo "<li><h3>Bonjour ".$_SESSION['identifiant_u']."</h3></li>";
            echo '</br>';
            // On affiche un lien pour fermer notre session
            echo '<a href="deconnexion.php">Déconnexion</a>';
		}
	?>