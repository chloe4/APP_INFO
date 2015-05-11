<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>

        <!--On définit tous les champs nécessaires à lsa page membre-->
<form method="post" action="traitement.php">


  <!--Produits à vendre-->
       <p>Cochez les aliments que vous voulez vendre en fruit :<br />
       <input type="checkbox" name="fruit_title" id="frites" /> <label for="frites">Frites</label><input type="number" value="1" max="50" min="0" step="1"><br />
   </p>
   <p>Cochez les aliments que vous voulez vendre en légume :<br />

   <!--Petite description sur la personne-->
<form method="post" action="traitement.php">
   <p>
       <label for="ameliorer">
       Parlez nous de vous 
       </label>
       <br />
       
       <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
       Etes vous une patate ?!
       </textarea>       
   </p>
    <!--Lieu d'habitation/vente-->
   <p> <label for="pays">Dans quel département habitez-vous jeune pousse de bambou ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
           </optgroup>
           <optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
           </optgroup>
           <optgroup label="Asie">
               <option value="chine">Chine</option>
               <option value="japon">Japon</option>
           </optgroup>
       </select>
   </p>
</form>
           
            <input type="submit" value="Enregistrer"/>
        <input type="submit" value="Modifier" /></br>
            
        </form>
    
        <?php include('bandeau_bas.php'); ?>

    </html>