<?php session_start() ?>
<!DOCTYPE html>
	
<html>
		<?php 
		 include('C:\wamp\www\APP_INFO\Modele\redirection.php'); 
		 
			include('simpleuh.php'); 
			include('C:\wamp\www\APP_INFO\Modele\commenter_sujet_php.php'); 
        ?>
	 	

	 	
	 <h1> Forum</h1>


 			<form method="post">
           <textarea name="commentaire_r" rows="10" cols="50">
Commentez....
       </textarea>   
            <input type="submit" name="submit" Value="Commenter"/>
            </form>
            
        	<p> <a href="sujet_forum.php"/>Voir les sujets existants </p>

<?php include('bandeau_bas.php'); ?>
	
	</html>