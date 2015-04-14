<!DOCTYPE html>

    <html>

        <head>
            <link type="text/css" rel="stylesheet" href="bandeaucss.css"/>
            <meta charset="UTF-8">
            <title>Espace membre</title>
        </head>
        
        <body>
                <body id="fond"/>
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



        <?php
            // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
            session_start ();

            // On récupère nos variables de session
            if (isset($_SESSION['identifiant_u']) && isset($_SESSION['mot_passe_u'])) {
                echo "<h3>Bonjour ".$_SESSION['identifiant_u']."</h3>";
                echo '</br>';
                // On affiche un lien pour fermer notre session
                echo '<a href="./deconnexion.php">Déconnexion</a>';
            }
            else {
            echo 'Les variables ne sont pas déclarées.';
            }
        ?>

            <img id="producteur" src ="http://www.editions-france-agricole.fr/wp-content/uploads/2014/04/Pierrick-Le-Jardinier.jpg"/>
            <p id="description"> Bonjour, <br> productrice depuis mon plus jeune âge, je chouchoute tous les fruits et légumes que je cultive : <br> 
                <ul id="description">
                    <li> des haricots</li>
                    <li> des pommes</li>
                    <li> des courgettes</li>
                </ul>
            </p>







            <div class ="Fairemescourses"> <a href ="panier.html"/>Faire mes courses</a></div>
            <div id="footer">
                <p>- Contact - </p>         
                <p><a href ="mentions_legales.html/">Mentions Legales -</a></p> 
            </div>


        </body>
    
    </html>   