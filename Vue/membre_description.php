<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php');  ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>
        <?php include('C:\wamp\www\APP_INFO\Modele\ajout_php.php'); ?>

        <!--On définit tous les champs nécessaires à lsa page membre-->
<h1> Page d'offre de Fruits & Légumes</h1>
  <form action="Bandeau.php" method="post">
           
           <p> Type de produit :<select name="type_a" id="type">
                                    <option value="fruit">Fruit</option>
                                    <option value="legume">Légumes</option>
                                </select></br>
                Nom du produit : <input type="checkbox" name="nom_a" />Banane</br>
                Quantité : <input type="number" value="1" max="50" min="0" step="1" name="id_o"><br />
                Variété du produit : <input type="int" name="varietes_a" /></br>
                Prix : <input type="number" value="1" max="50" min="0" step="0,25" name="montant_total_o"><br />
                Commentaire sur le produit : <input type="text" name="description_a" /></br>
            </p>
                  
            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Ajout d'article"/>


        	<input type="submit" value="Modifier" /></br>
            
        </form>
    
        <?php include('bandeau_bas.php'); ?>

    </html>