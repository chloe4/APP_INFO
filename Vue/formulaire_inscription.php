<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>

        <!--On définit tous les champs nécessaires à l'inscription-->
<<<<<<< HEAD
        <section>
        <form action="" method="post">
=======
        <form action="membre_description.php" method="post">
>>>>>>> origin/master

            <p> Nom : <input type="text" name="nom_u" /></br>
            Prénom : <input type="text" name="prenom_u" /></br>
            Année de naissance (JJ/MM/AAAA): <input type="date" name="date_naissance_u" /></br>
            Téléphone : <input type="int" name="telephone_u" /></br>
            Email : <input type="email" name="email_u" /></br>
            Pseudo : <input type="text" name="identifiant_u"/></br>
            Mot de passe : <input type="password" name="mot_passe_u" /></br>
            Mot de passe confirmation: <input type="password" name="motdepasse2" /></br></p>

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
          
          <!-- zone pour cocher truc d'utilisation & accepter (ou pas) de recevoir mail d'info
           <form method="post" action="traitement.php">
   <p>
       Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
       <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
       <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
       <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
       <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>
   </p>
</form> J'accepte les conditions d'utilisation -->

            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="S'inscrire"/></br>
            
        </form>
        </section>
    
        <?php include('bandeau_bas.php'); ?>

    </html>
