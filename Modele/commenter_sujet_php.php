
<?php  

	$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
		$sql = "SELECT commentaire_f FROM forum";
		$request = $db->query($sql);
		$request->execute(array("commentaire_f"));

 		 while ($tableau = $request->fetch()){
    	$commentaire = $tableau['commentaire_f'];
    	  
          echo "<strong>Commentaire</strong> : <p/>".$commentaire."  </br>    ";}
?>


<?php

	if (isset($_POST["submit"]))
	{
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		
		$commentaire=$_POST["commentaire_f"];// réponse au poste 
		$id = $_SESSION['identifiant_u'];

		$sql = "INSERT INTO utilisateur (`commentaire_f`)  VALUES ('".$commentaire."')  ";
		$request = $db->prepare($sql);
		$request->execute(array(
			
			'commentaire_u' => $commentaire,
			 
		));
		
		

			echo "<h1>Votre commentaire est enregistré.</h1>";

    }

	

?>

<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


  // On selectionne les données dont on a besoin
  $sql = "SELECT identifiant_u AND commentaire_f  FROM utilisateur  ";
   
    $request = $db->query($sql);
    // On rentre ces données dans un tableau
            // On rentre ces données dans un tableau
    $request->execute(array("identifiant_u", "commentaire_f"));
  while ($tableau = $request->fetch()){
    $ref = $tableau['identifiant_u'];
    
    $commentaire = $tableau['commentaire_f'];

    echo "<p/><strong>Commentaire de</strong> :".$ref." </br>";
    
 echo " : <p/>".$commentaire." </br>   ";
	   		


                 
 }
  ?>

