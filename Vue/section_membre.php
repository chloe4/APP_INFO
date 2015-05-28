<?php session_start() ?>
    <!DOCTYPE html>
        <html>

            <?php 
                include('simpleuh.php'); 
                include('C:\wamp\www\APP_INFO\Modele\section_membre_php.php')
            ?>

            <center><h1><?php echo $prenom."  ".$nom; ?> </h1></center>         
            <center><img id="producteur" src ="Images_Deco/profil.jpg"/></center>

            <?php 
                echo "<p>Bonjour, je m'appelle " .$prenom."  ".$nom. " et j'habite à ".$localisation. ".</br>";
                echo "<p> Vous pouvez me joindre sur mon téléphone : 0".$telephone. "</p>" ;
            ?>

            <p><a href ="page_offre.php"/>Mes offres</a></p>
            <p><a href ="page_faire_offre.php"/>Faire une offre</a></p>
            </br>
            <img src="Images_Deco/enveloppe.png"/>
            <p>Me contacter par mail : <?php echo "<a href=\"www.gmail.com/intl/fr/mail/help/about.html#inbox\">".$email."</a>"; ?> </p>
            <p><a href ="membre_description.php"/>Modifier mon profil</a></p>

            <?php include('bandeau_bas.php'); ?>

        </html>   