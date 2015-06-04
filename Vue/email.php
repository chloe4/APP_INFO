<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php
            include('simpleuh.php');
            include('C:\wamp\www\APP_INFO\Modele\email_php.php'); 
        ?>
        
        <section></br>
            <form action="" method="post">
                <p> Votre nom : <input type="text" name="nom_u"/></br>
                    Votre prénom : <input type="text" name="prenom_u"/></br>
                    Votre adresse mail : <input type="text" name="email_u"/></br>
                    Objet : <input type="text" name="objet"/></br>
                    Contenu du message : <textarea type="text" name="commentaire" rows="10" cols="30"/></textarea></br>
                </p>
                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="Envoyer"/></br>
            </form>
        </section>

        <?php include('bandeau_bas.php'); ?>

    </html>
