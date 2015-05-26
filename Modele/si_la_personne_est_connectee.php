<?php 
		if(isset($_SESSION["identifiant_u"])){
			echo "<li>Bonjour ".$_SESSION['identifiant_u']."";
            echo '<ul>';
            // On affiche un lien pour fermer notre session
            echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
            echo '<li><a href="page_faire_offre.php">Offre</a></li>';
            echo '</ul></li>';}
            ?>