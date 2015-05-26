<?php 
		if(isset($_SESSION["identifiant_u"])){
			echo "<li>Bonjour ".$_SESSION['identifiant_u']." ";
            echo '</br>';
            echo '<ul>';
            // On affiche un lien pour fermer notre session
            echo '<h1><a href="deconnexion.php">Déconnexion</a></h1>';
            echo '<h1><a href="page_faire_offre.php">Offre</a></h1>';
            echo '</ul></li>';}
            ?>