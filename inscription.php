<!DOCTYPE html>

    <html>





        <head>

            <!--On associe à la page html la page CSS-->
            <link type="text/css" rel="stylesheet" href="page_css.css"/> 
            <title> S'inscrire </title>
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
                    <p style="color: #FF140C; font-size :16px"><a href="file:///C:/wamp/www/jsmp/page_principale.html">Accueil</a></p>
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
            include('C:\wamp\www\jsmp\config.php'); 
            ?>

            <!--On définit tous les champs nécessaires à l'inscription-->
            <form action="inscription.php" method="post">
           
                Nom : <input type="text" name="nom_u" /></br>
                Prénom : <input type="text" name="prenom_u" /></br>
                Année de naissance : <input type="date" name="date_naissance_u" /></br>
                Téléphone : <input type="int" name="telephone_u" /></br>
                Pseudo : <input type="text" name="identifiant_u"/></br>
                Mot de passe : <input type="password" name="mot_passe_u" /></br>
                Mot de passe confirmation: <input type="password" name="motdepasse2" /></br>
                Email : <input type="email" name="email_u" /></br>

                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="S'inscrire"/></br>
            
            </form>
    

            <div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
                <p><a href="file:///C:/wamp/www/jsmp/Contact.html">- Contact -</a> </p>
                <p>Mentions Legales - </p>
                <p>Aide - </p>
            </div>


        </body>


    </html>
