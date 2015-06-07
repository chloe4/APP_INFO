<?php

	if (isset($_POST["submit"]))
	{

		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
   
$commentaire1=$_POST["commentaire_r"];
	$id1 = $_SESSION['identifiant_u'];
    $sql = "SELECT * FROM forum";
	// Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	// Du coup "query" directement
	$request = $db->query($sql);

	// On rentre ces données dans un tableau
    $request->execute(array("identifiant_u", "commentaire_f", "sujet_f"));
 	while ($tableau = $request->fetch()){
 		$id = $tableau['identifiant_u'];
 		$commentaire = $tableau['commentaire_f'];
 		$sujet = $tableau['sujet_f'];
			
   	}
			
	$sqldem = "INSERT INTO reponse (`identifiant_u`,`sujet_f`,`commentaire_r`) VALUES ('".$id1."','".$sujet."','".$commentaire1."')";
	$requestdem = $db->prepare($sqldem);
	$requestdem->execute(array(
		
		'identifiant_u' => $id1,
		'sujet_f'=> $sujet, 
		'commentaire_r'=>$commentaire1
	));
echo "<h1>Votre commentaire est enregistré.</h1>";

}
?>
		
		

			

  


