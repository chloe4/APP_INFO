<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php');  ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>

        <!--On définit tous les champs nécessaires à lsa page membre-->
<center><form method="post" action="panier.php">


  <!--QUantité du produit -->
       <p>Selectionnez la quantité :<br />
       <input type="number" value="1" max="50" min="0" step="1"><br />
   </p>

  <!--Selectionner pays -->

  <p> Option 1 : </p>
   <p> Dans quel département  ?<br/>
              <select name="localisation_u" id="departement">
                <optgroup label="Ile-de-france">
                  <option value="paris">Paris</option>
                  <option value="val-de-marne">Val-de-Marne</option>    
                </optgroup>
                <optgroup label="Midi-Pyrénées">
                 <option value="haute-garonne">Haute-Garonne</option>
                 <option value="gers">Gers</option>
                </optgroup>
              </select>
          </p>
           
    <p> Option 2 :</p>
    <p>  <a href="carte.html">Géolocalisez-vous</a></p>   

            <input type="submit" value="Ajouter "/>
        
            
        </form></center>
    
        <?php include('bandeau_bas.php'); ?>

    </html>