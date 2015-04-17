<!DOCTYPE html>

    <html>

        <?php 
            include('simpleuh.php'); 
        ?>

            <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
            vers la base de données-->
            <?php
            include('connexion_php.php'); 
            ?>

            <!--On définit tous les champs nécessaires à la connexion-->
            <form action="formulaire_connexion.php" method="post">
               <p style = "font-family:across the stars ; color:#E8CC06" >Pseudo : <input type="text" name="identifiant_u"/></br>
                Mot de passe : <input type="password" name="mot_passe_u" /></br></p>
                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="Se connecter"/></br>
            </form>
    
            <div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
            
                <p><a href="mentionslegales.html">- Mentions Legales - </p> 
                
            </div>

        </body>

    </html>
