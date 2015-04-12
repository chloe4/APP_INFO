<!DOCTYPE html>

    <html>

        <head>

            <!--On associe à la page html la page CSS-->
            <link type="text/css" rel="stylesheet" href="Bandeaucss.css"/> 
            <title> Ajout de fruits et de légumes </title>
            <meta charset="utf-8" />

        </head>


        <body>
        <!--On met un fond à notre page-->
                <body background="http://images99.i.m.pic.centerblog.net/v8v99xxn.jpg"/>
<ul id="menu">
    <li><a href="http://localhost/APP_INFO/Bandeau.html">Accueil</a>
        
    </li>
    <li><a href="#">Calendrier</a>
        
    </li>
    <li><a href="#">Nos producteurs</a>
        
    </li><li><a href="#">Des infos !</a>
        <ul>
            
            <li><a href="#">Qui sommes-nous</a></li>
            <li><a href="#">Contact</a></li>        
        </ul>
    </li><li><a href="#">Mon panier</a>
        <ul>
            <li><a href="#">En cours</a></li>
            <li><a href="#">Avant</a></li>  
        </ul>
    </li>
    </li><li><a href="#">Rechercher</a> 
    </li>
    </li><li><a href="#">Nous rejoindre !</a>
        <ul>
            <li><a href="#">S'inscire</a></li>
            <li><a href="#">Se connecter</a></li>           
        </ul>
    </li>
</ul>

            <!--On définit les boutons d'en-tête de la page-->
            
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
            include('C:\wamp\www\APP_INFO\ajout_config.php'); 
            ?>

            <!--On définit tous les champs nécessaires à l'ajout de fruits et de légumes-->
            <form action="ajoutfruits&légumes.html" method="post">
           
                Article : <input type="text" name="article_a" /></br>
                Variété : <input type="text" name="varietes_a" /></br>
                Nombre d'articles proposés : <input type="int" name="nb_article_a" /></br>
                Prix (euros) : <input type="int" name="prix_a" /></br>
                Durée de vie (jours) : <input type="int" name="duree_vie_a" /></br>
                 

                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="Ajout d'article"/></br>
            
            </form>
    

            <div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
                <p><a href="file:///C:/wamp/www/APP_INFO/Contact.html">- Contact -</a> </p>
                <p>Mentions Legales - </p>
               
            </div>


        </body>


    </html>