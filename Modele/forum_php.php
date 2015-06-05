<?php

	if (isset($_POST["submit"]))
	{
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		$sujet = $_POST["sujet_f"];
		$commentaire=$_POST["commentaire_f"];
		//$commentaire1=$_POST["commentaire_u"];// réponse au poste 
		$id = $_SESSION['identifiant_u'];

		
		

		$sql = "INSERT INTO forum (`sujet_f`,`identifiant_u`,`commentaire_f`)  VALUES ('".$sujet."','".$id."','".$commentaire."')  ";
		$request = $db->prepare($sql);
		$request->execute(array(
			'identifiant_u' => $id,
			'sujet_f' => $sujet,
			'commentaire_f' => $commentaire,
			
		));
		
		

			echo "<h1>Votre sujet est enregistré.</h1>";

    }

	

?>
	

