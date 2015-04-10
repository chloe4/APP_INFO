<!DOCTYPE html>

    <html>

        <head>
            <link type="text/css" rel="stylesheet" href="page_css.css"/>
            <meta charset="UTF-8">
            <title>Espace membre</title>
        </head>
        
        <body>
        <body background="http://images.forwallpaper.com/files/thumbs/preview/20/207943__texture-timber-lumber-wood-close-up_p.jpg"/>
        
            <div id="header">               
                <div id="button"> <p style="color:  #331f1d">Se connecter </p> </div >
                <div id="button"> <p style="color:  #331f1d">S'inscrire</p> </div >
                <div id="button"> <p style="color:  #331f1d">Mon panier </p> </div >                    
                        
                <h2>Jamais sans ma pomme </h2>
                <h3>So fresh , so French! </h3>
                <img style = "height:120px ; width:170px ; float : right" src="Logo.png/"/>
            </div>

            <div id="barre">
                <ul>
                    <li><a href = "AccueilLilice.html/"> Accueil </a> </li>
                    <li>Fruits & Legumes</li>
                    <li><a title="fruits et légumes" href="http://www.fruits-legumes.org/">Le calendrier des fruits et legumes</a></li>
                    <li>Forum</li>
                    <li><a href = "Qui_sommes_nous.html/">Qui sommes-nous ?</li>        
                </ul>
            </div>

            <form action="" class="formulaire">
                <label for="monchampderecherche"><p style="font-family:across the stars"><strong>Recherche Fruits & Legumes</strong></p></label> <input id="monchampderecherche" class="champ" type="text" value="Search...)"/>
                <input class="bouton" type="button" value=" " />
            </form>






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