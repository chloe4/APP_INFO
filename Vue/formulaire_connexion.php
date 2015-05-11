<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\connexion_php.php'); ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\connexion_php.php'); ?>

        <form action="formulaire_inscription.php" method="post">
            <p> Si vous n'êtes pas inscrit , créez votre compte
            <input type="submit" name="envoyer" Value="s'inscrire"/></br></p>
            <!--On définit tous les champs nécessaires à la connexion-->
            </form>

        <form action="section_membre.php" method="post">
            <p> Pseudo : <input type="text" name="identifiant_u"/></br>
                Mot de passe : <input type="password" name="mot_passe_u" /></br>
            </p>
            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Se connecter"/></br>
        </form>
        
        <?php include('bandeau_bas.php'); ?>

    </html>
