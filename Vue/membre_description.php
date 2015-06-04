<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php   include('simpleuh.php');
                include('C:\wamp\www\APP_INFO\Modele\modif.php');
                include('C:\wamp\www\APP_INFO\Modele\modifmdp.php');
                include('C:\wamp\www\APP_INFO\Modele\modifemail.php'); 
        ?>
        

        <!--On définit tous les champs nécessaires à lsa page membre-->
        <h1> Modifier mon profil</h1>
 
        <p><form method="post">
            <p>Changer teléphone</p>
            <input type="text" name="telephone_u"><br/><br/>
            <input type="submit" name="submit" value="Changer">

            <p>Changer e-mail</p>
            <input type="text" name="email_u"><br/><br/>
            <input type="submit" name="submit1" value="Changer">

            <p> Changer mot de passe </p>
            <input type="text" name="mot_passe_u"><br/><br/>
            <input type="submit" name="submit2" value="Changer">
        </form></p>
    
        <?php include('bandeau_bas.php'); ?>

    </html>