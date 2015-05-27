<?php session_start() ?>
<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>
        <?php include('C:\wamp\www\APP_INFO\Modele\redirection.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\ajout_php.php'); ?>

        <!--On définit tous les champs nécessaires à l'ajout de fruits et de légumes-->
        <form action="" method="post">
           
            <p> Nom du produit : <input type="text" name="nom_a" /></br>
                Commentaire sur le produit : <input type="text" name="description_a" /></br>
            </p>
                 
            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Ajout d'article"/></br>
            
        </form>
    

        <?php include('bandeau_bas.php'); ?>

    </html>