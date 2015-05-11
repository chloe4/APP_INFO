<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>

        <!--On définit tous les champs nécessaires à l'inscription-->
        <form action="section_membre.php" method="post">

            <p> Nom : <input type="text" name="nom_u" /></br>
            Prénom : <input type="text" name="prenom_u" /></br>
            Année de naissance (JJ/MM/AAAA): <input type="date" name="date_naissance_u" /></br>
            Téléphone : <input type="int" name="telephone_u" /></br>
            Email : <input type="email" name="email_u" /></br>
            Pseudo : <input type="text" name="identifiant_u"/></br>
            Mot de passe : <input type="password" name="mot_passe_u" /></br>
            Mot de passe confirmation: <input type="password" name="motdepasse2" /></br></p>

            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="S'inscrire"/></br>
            
        </form>
    
        <?php include('bandeau_bas.php'); ?>

    </html>
