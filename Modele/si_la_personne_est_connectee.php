<?php 
		if(isset($_SESSION["identifiant_u"])){
			echo "<li><p><a href='#'/>Bonjour ".$_SESSION['identifiant_u']."</p>";
			echo"<ul>";
			echo '<li><p><a href="membre_description.php">Modifier mon profil</a></p></li>';
			echo '<li><p><a href="deconnexion.php">Déconnexion</a></p></li>';
			echo"</ul>";
			echo"</li>";
            echo '</br>';
            // On affiche un lien pour fermer notre session
           
		}
	?>