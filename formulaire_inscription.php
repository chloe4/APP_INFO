<!DOCTYPE html>

    <html>


        <head>

            <!--On associe à la page html la page CSS-->
            <link type="text/css" rel="stylesheet" href="Bandeaucss.css"/> 
            <title> S'inscrire </title>
            <meta charset="utf-8" />

        </head>


        <body>
        <!--On met un fond à notre page-->
        <body background="http://images99.i.m.pic.centerblog.net/v8v99xxn.jpg"/> 
            <!--On définit les boutons d'en-tête de la page-->
           <ul id="menu">
    <li><a href="http://localhost/APP_INFO/Bandeau.html">Accueil</a>
        
    </li>
    <li><a href="http://www.mangerbouger.fr/IMG/pdf/inpes_manger_bouger_pdf_produits_saison.pdf">Calendrier</a>
        
    </li>
   <li><a href="#">Acheter/Echanger</a>
        <ul>
            
            <li><a href="http://localhost/APP_INFO/fairemescourses.html#">Nos producteurs</a></li>
            <li><a href="http://localhost/APP_INFO/Nos_produits.html#">Nos produits</a></li>        
        </ul>
        
    </li><li><a href="#">Des infos !</a>
        <ul>
            
            <li><a href="http://localhost/APP_INFO/Qui_somme_nous.html#">Qui sommes-nous</a></li>
            <li><a href="http://localhost/APP_INFO/Contact.html#">Contact</a></li>        
        </ul>
    </li><li><a href="#">Mon panier</a>
        <ul>
            <li><a href="http://localhost/APP_INFO/panier.php">En cours</a></li>
            <li><a href="#">Avant</a></li>  
        </ul>
    </li>
    </li><li><a href="http://localhost/APP_INFO/recherche.php#">Rechercher</a> 
    </li>
    </li><li><a href="#">Nous rejoindre !</a>
        <ul>
            <li><a href="http://localhost/APP_INFO/formulaire_inscription.php#">S'inscire</a></li>
            <li><a href="http://localhost/APP_INFO/formulaire_connexion.php#">Se connecter</a></li>           
        </ul>
    </li>
</ul>

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
            include('inscription_php.php'); 
            ?>

            <!--On définit tous les champs nécessaires à l'inscription-->
            <form action="AccueilLilice.html" method="post">
           
                <p style = "font-family:across the stars ; color:#E8CC06" >Nom : <input type="text" name="nom_u" /></br>
                Prénom : <input type="text" name="prenom_u" /></br>
                Année de naissance (JJ/MM/AAAA): <input type="date" name="date_naissance_u" /></br>
                Téléphone : <input type="int" name="telephone_u" /></br>
                Email : <input type="email" name="email_u" /></br>
                Pseudo : <input type="text" name="identifiant_u"/></br>
                Mot de passe : <input type="password" name="mot_passe_u" /></br>
                Mot de passe confirmation: <input type="password" name="motdepasse2" /></br></p>

                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="S'inscrire"/></br>
            
            </form>
    

            <div id="footer"> <!--bandeau en bas , à répéter sur toutes les pages web -->
               
               <p><a href="mentionslegales.html">- Mentions Legales - </p>  
                
            </div>


        </body>


    </html>
