<?php

	if (isset($_POST["commentaire_u"]))
	{
		$commentaire = $_POST["commentaire_u"];
		$id = $_SESSION['identifiant_u'];

		// On se connecte à la base de données via la fonction PDO
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		

		$sql = "INSERT INTO utilisateur (`commentaire_u`)  VALUES '.$commentaire.' WHERE identifiant_u ='$id' ";
		$request = $db->prepare($sql);
		$request->execute(array(`commentaire_u` => $commentaire));
		

			echo "<h1>Votre sujet est enregistré.</h1>";

    }

	

?>
	

