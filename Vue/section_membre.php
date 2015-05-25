<?php session_start() ?>
<!DOCTYPE html>

    <html>

        <?php 
            include('simpleuh.php'); 
        ?>


        <img id="producteur" src ="Images_Deco/profil.jpg"/>
        <?php 
            $db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $id = $_SESSION['identifiant_u'];
            // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
            $sql = "SELECT * FROM utilisateur WHERE identifiant_u = '$id'";
            // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
            // Du coup "query" directement
            $request = $db->query($sql);

            // On rentre ces données dans un tableau
            $request->execute(array("nom_u"));
            while ($tableau = $request->fetch()){
                $prenom = $tableau['prenom_u'];
                $nom = $tableau['nom_u'];
                $localisation = $tableau['localisation_u'];
                $telephone = $tableau['telephone_u'];
                $email = $tableau['email_u'];
                echo "<h1>Bonjour, je m'appelle " .$prenom."  ".$nom. " et j'habite à ".$localisation. ".</br>";
             
                echo "<h1> Vous pouvez me joindre sur mon téléphone : 0".$telephone. "" ;
            }
        ?>

        <p><a href ="page_offre.php"/>Mes offres</a></p>
        <p><a href ="page_faire_offre.php"/>Faire une offre</a></p>
        </br>
        <img src="Images_Deco/enveloppe.png"/>
        <p>Me contacter par mail : <?php echo "<a href=\"www.gmail.com/intl/fr/mail/help/about.html#inbox\">".$email."</a>"; ?> </p>
        <p><a href ="membre_description.php"/>Modifier mon profil</a></p>

        <?php 
            include('bandeau_bas.php'); 
        ?>

    </html>   