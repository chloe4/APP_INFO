<!DOCTYPE html>

    <html>


        <head>
            <title>Formulaire d'identification</title>
        </head>


        <body>
    
        <?php
            include('test2.php'); 
        ?>

            <form action="test3.php" method="post">
                Votre login : <input type="text" name="pseudo"><br />
                Votre mot de passe : <input type="password" name="motdepasse"><br />
                <input type="submit" value="Connexion">
            </form>

        </body>
    

    </html>