<!DOCTYPE html>

    <html>

        <?php 
            include('simpleuh.php'); 
        ?>

            <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
            vers la base de données-->
            <?php
            include('ajout_php.php'); 
            ?>

            <!--On définit tous les champs nécessaires à l'ajout de fruits et de légumes-->
            <form action="Nos_produits.php" method="post">
           
                Article : <input type="text" name="article_a" /></br>
                Variété : <input type="text" name="varietes_a" /></br>
                Nombre d'articles proposés : <input type="int" name="nb_article_a" /></br>
                Prix (euros) : <input type="int" name="prix_a" /></br>
                Durée de vie (jours) : <input type="int" name="duree_vie_a" /></br>
                Commentaires : <input type="text" name="commentaires_a" /></br>
                 

                <!--On définit un bouton permettant d'envoyer les informations-->
                <input type="submit" name="envoyer" Value="Ajout d'article"/></br>
            
            </form>
    

           <?php 
                include('bandeau_bas.php'); 
            ?>


    </html>