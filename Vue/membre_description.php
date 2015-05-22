<?php session_start(); ?>

<!DOCTYPE html>

    <html>

        <?php include('simpleuh.php');  ?>

        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('C:\wamp\www\APP_INFO\Modele\inscription_php.php'); ?>

        <!--On définit tous les champs nécessaires à lsa page membre-->
		<form method="post" action="Bandeau.php">

	  		<!--Produits à vendre-->
	       	<p>Cochez les aliments que vous voulez vendre en fruit :<br/>
	       		<input type="checkbox" name="nom_a"  /><label for="banane"> Banane</label><input type="number" value="1" max="50" min="0" step="1"><br />
			</p>
	   		<p>Cochez les aliments que vous voulez vendre en légume :<br />
				<input type="checkbox" name="nom_a" /> <label for="pomme de terre">Pomme de terre</label><input type="number" value="1" max="50" min="0" step="1"><br />
	   		</p>
	   		
        <!--On connecte la page PHP avec la base de données via le fichier config.php / Toutes les informations écrites sur la page sont envoyées 
        vers la base de données-->
        <?php include('ajout_php.php'); ?>

        <!--On définit tous les champs nécessaires à l'ajout de fruits et de légumes-->
        
           
            Article : <input type="text" name="nom_a" /></br>
            Variété : <input type="text" name="varietes_a" /></br>
            Type de produit ! 
            Commentaires : <input type="text" name="commentaires_a" /></br>
                 
            <!--On définit un bouton permettant d'envoyer les informations-
            <input type="submit" name="envoyer" Value="Ajout d'article"/></br> CHLOE j'ai mis en commentaire ce bouton car les deux d'en bas servent à ca déja -->
            
        
    <!--Petite description sur la personne-->
           
                
                    <p>Parlez nous de vous</p><br/>
                    <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">Etes vous une patate ?!</textarea>       
                </p>
            
           
            <input type="submit" value="Enregistrer"/>
            <input type="submit" value="Modifier" /></br>
            
        </form>

        <?php 
            include('bandeau_bas.php'); 
        ?>

    </html>





	   		
    