<!DOCTYPE html>

    <html>

        <?php 
            include('simpleuh.php'); 
        ?>

        <?php
            // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
            session_start ();
            // On récupère nos variables de session
            if (isset($_SESSION['identifiant_u']) && isset($_SESSION['mot_passe_u'])) {
                echo "<h3>Bonjour ".$_SESSION['identifiant_u']."</h3>";
                echo '</br>';
                // On affiche un lien pour fermer notre session
                echo '<a href="APP_INFO\Modele\deconnexion.php">Déconnexion</a>';
            }
            else {
                echo 'Les variables ne sont pas déclarées.';
            }
        ?>

        <img id="producteur" src ="http://www.editions-france-agricole.fr/wp-content/uploads/2014/04/Pierrick-Le-Jardinier.jpg"/>
        <p id="description"> Bonjour, <br> productrice depuis mon plus jeune âge, je chouchoute tous les fruits et légumes que je cultive : <br> 
            <ul id="description">
                <li> des haricots</li>
                <li> des pommes</li>
                <li> des courgettes</li>
            </ul>
        </p>

        <div class ="Fairemescourses"> <a href ="panier.html"/>Faire mes courses</a></div>
        
        <?php 
            include('bandeau_bas.php'); 
        ?>

    </html>   