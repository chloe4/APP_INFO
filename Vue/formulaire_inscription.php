<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>
      <?php 
        if(isset($_SESSION["identifiant_u"])){
          echo "<h1>Vous êtes connecté ! </h1></br>";
        }
        else{
        
  ?>
        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
       

        <!--On définit tous les champs nécessaires à l'inscription-->

        <section>
        <form action="" method="post">

     


            <p> Nom : <input type="text" name="nom_u" /></br>
            Prénom : <input type="text" name="prenom_u" /></br>
            Année de naissance (JJ/MM/AAAA): <input type="date" name="date_naissance_u" /></br>
            Téléphone : <input type="int" name="telephone_u" /></br>
            Email : <input type="email" name="email_u" /></br>
            Pseudo : <input type="text" name="identifiant_u"/></br>
            Mot de passe : <input type="password" name="mot_passe_u" /></br>
            Mot de passe confirmation: <input type="password" name="motdepasse2" /></br>
            Vous étes :<select name="type_u" id="type">
                                    <option value="vendeur">Vendeur</option>
                                    <option value="acheteur">Acheteur</option>
                                    <option value="acheteur et vendeur">Acheteur & Vendeur</option>
                                  
                                </select></br></p>

            <p> Dans quel département habitez-vous jeune pousse de bambou ?<br/>
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
          
          
           
   <p>
       
       <input type="checkbox" name="cgu" />J'accepte les <a href="CGU.php">conditions d'utilisations</a><br/>
       
   </p>


            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="S'inscrire"/></br>
            
        </form>
        </section>
    
    <?php } ?>
        <?php include('bandeau_bas.php'); ?>

    </html>
