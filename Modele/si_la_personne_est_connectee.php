<?php 
	if(isset($_SESSION["identifiant_u"])){
		echo "<li>Bonjour ".$_SESSION['identifiant_u']." ";
            echo '</br>';
            echo '<ul>';
            // On affiche un lien pour fermer notre session            
            echo '<li><a href="page_faire_offre.php">Offre</a></li>';
            echo '<li><a href="section_membre.php">Ma page</a></li>';
            echo '<li><a href="membre_description.php">Modifier profil</a></li>';
            echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
            echo'<li><a href="panier.php">Mon panier</a></li>';
            echo'<li><a href="forum.php">Forum</a></li>';
                                    
                             
            echo '</ul></li>';}
      ?>