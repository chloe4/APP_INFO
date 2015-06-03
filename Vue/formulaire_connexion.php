<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php
            include('simpleuh.php');
            include('C:\wamp\www\APP_INFO\Modele\connexion_php.php'); 
            if(isset($_SESSION["identifiant_u"])){
                echo "<h1>Vous êtes déjà connecté ! </h1></br>";
            }
            else{
        ?>
        <section></br>
        <form action="formulaire_inscription.php" method="post">
            <p> Si vous n'êtes pas inscrit , créez votre compte : 
            <input type="submit" name="envoyer" Value="S'inscrire"/></br></p>
            <!--On définit tous les champs nécessaires à la connexion-->
        </form>

        <form action="" method="post">
            <p> Pseudo : <input type="text" name="identifiant_u"/></br>
                Mot de passe : <input type="password" name="mot_passe_u" /></br>
            </p>
            <!--On définit un bouton permettant d'envoyer les informations-->
            <input type="submit" name="envoyer" Value="Se connecter"/></br>
        </form>
        </section>
        <?php } ?>
        <?php include('bandeau_bas.php'); ?>

    </html>
