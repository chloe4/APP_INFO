<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\page_faire_offre_php.php'); ?>

        <!--On définit tous les champs nécessaires à l'inscription-->
        <form action="" method="post">
          <?php include('C:\wamp\www\APP_INFO\Modele\liste_bdd.php'); ?>
          Quantité: <input type="number" value="1" max="50" min="0" step="1" name="quantite_initiale_lo" /></br>
          Prix unitaire : <input type="int" name="prix_unitaire_lo" /></br>
            </p>

            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Faire une offre"/></br>
            
        </form>
    
        <?php include('bandeau_bas.php'); ?>

    </html>
