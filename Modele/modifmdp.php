<?php
 if (isset($_POST['submit2'])){

 	
 	$mdp =sha1($_POST['mot_passe_u'] ) ;

    $id = $_SESSION['identifiant_u'];


 			$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
 		
 
		$sql = " UPDATE utilisateur SET mot_passe_u = '$mdp' WHERE identifiant_u='$id'";

 		$request = $db->query($sql);
 	

			
 		echo "<h1>Modification enregistrée.</h1>";
 }
?>