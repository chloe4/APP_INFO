<?php session_start() ?>
<!DOCTYPE html>
	
	<html>

		<?php 
		 include('C:\wamp\www\APP_INFO\Modele\redirection.php'); 
			include('simpleuh.php'); 
			include('C:\wamp\www\APP_INFO\Modele\forum_php.php'); 
	 	?>

	 	 <h1> Forum</h1>

 			<form method="post">

            <p>Ajouter un sujet : <input type="text" name="sujet_f" /></p>
            <textarea name="commentaire_f" rows="10" cols="50">

       Quelques précisions jeune pousse de bambou...

       </textarea>   
            <input type="submit" name="submit" Value="Ajouter"/>
            </form>
            
        	<p> <a href="sujet_forum.php"/>Voir les sujets existants </p>

<?php include('bandeau_bas.php'); ?>
	
	</html>