<!DOCTYPE html>

    <html>

        <head>

            <!--On associe à la page html la page CSS-->
            <link type="text/css" rel="stylesheet" href="page_css.css"/> 
            <title> Ajout de fruits et de légumes </title>
            <meta charset="utf-8" />

        </head>


        <body>
        <!--On met un fond à notre page-->
        <body background="http://www.castorama.fr/images/products/h/h_645105.jpg"/> 



            <!--On définit les boutons d'en-tête de la page-->
            <div id="header"> 
            
                <div id="button"> 
                    <p style="color: #FF140C; font-size :16px">Se connecter </p> 
                </div >
                <div id="button"> 
                    <p style="color: #FF140C; font-size :16px"><a href="file:///C:/wamp/www/APP_INFO/page_principale.html">Accueil</a></p>
                </div >
                <div id="button"> 
                    <p style="color: #FF140C; font-size :16px">Mon panier </p> 
                </div >

                <!--Titre de la page-->
                <h2> Bienvenue sur "Jamais sans ma pomme"<br> 
                    Inscrivez vous</br>
                </h2>
                <h3> So fresh, so french
                </h3>

            </div>

            
            <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
            vers la base de données-->
            <?php
            include('C:\wamp\www\APP_INFO\config.php'); 
            ?>

            <!--On définit tous les champs nécessaires à l'ajout de fruits et de légumes-->
            <form action="ajoutfruits&légumes.php" method="post">
           
                Article : <input type="text" name="article_a" /></br>
                Variété : <input type="text" name="varietes_a" /></br>
                Nombre d'articles proposés : <input type="int" name="nb_article_a" /></br>
                Prix : <input type="int" name="prix_a" /></br>
                Durée de vie : <input type="int" name="duree_vie_a" /></br>
                 

                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="Ajout d'article"/></br>
            
            </form>
    

            <div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
                <p><a href="file:///C:/wamp/www/APP_INFO/Contact.html">- Contact -</a> </p>
                <p>Mentions Legales - </p>
                <p>Aide - </p>
            </div>


        </body>


    </html>