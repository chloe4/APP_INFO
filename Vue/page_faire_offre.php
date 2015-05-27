<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php   include('simpleuh.php'); 
                include('C:\wamp\www\APP_INFO\Modele\page_faire_offre_php.php'); ?>


<h1> Page d'offre de Fruits & Légumes</h1>
        <!--On définit tous les champs nécessaires à l'inscription-->
        
        <form action="" method="post">
            <p>Nom du produit : <select name="nom_a" id="produit">
                <?php include('C:\wamp\www\APP_INFO\Modele\liste_bdd.php'); ?>
            </select></p>
        
            <p> Quantité : <input type="number" value="1" max="50" min="0" step="1" name="quantite_initiale_lo"><br />
                Prix : <input type="number" value="1" max="50" min="0" step="0,25" name="prix_unitaire_lo"><br />
                Commentaire sur le produit : <input type="text" name="description_a" /></br>
            </p>
            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Faire une offre"/></br>
            
        </form>
    
        <?php include('bandeau_bas.php'); ?>

    </html>
