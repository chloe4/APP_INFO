<?php

//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_u"])&&
		isset($_POST["prenom_u"])&&
		isset($_POST["date_naissance_u"])&&
		isset($_POST["telephone_u"])&&
		isset($_POST["localisation_u"])&&
		isset($_POST["email_u"])&&
		isset($_POST["identifiant_u"])&&
		isset($_POST["mot_passe_u"])&&
		isset($_POST["motdepasse2"])&& $_POST["mot_passe_u"] == $_POST["motdepasse2"]
		)
	{
		// On se connecte à la base de données via la fonction PDO
		include('connect_db.php');
		
		//echo "a"; (pour faire des tests)
		$sql = "INSERT INTO `jsmp`.`utilisateur` (`nom_u`,`prenom_u`,`date_naissance_u`,`telephone_u`,`localisation_u`,`email_u`,`identifiant_u`,`mot_passe_u`) VALUES (:nom_u,:prenom_u,:date_naissance_u,:telephone_u,:localisation_u,:email_u,:identifiant_u,:mot_passe_u)";
		$request = $db->prepare($sql);
		//print_r($_POST); //(pour faire des tests, afficher le nom, prénom,..., mot de passe)
		// permet de prendre la date sous un certain format : ici le format est DD/MM/AAAA
		$datedenaissancce = DateTime::createFromFormat('d/m/Y',$_POST['date_naissance_u']);

		// Si erreur, affiche l'erreur - permet "d'attraper" l'erreur
		try {
			$request->execute(array(
				"nom_u" => $_POST["nom_u"],
				"prenom_u" => $_POST["prenom_u"],
				//Permet de transformer le format de la date pour que la base de données puisse le comprendre
				"date_naissance_u" => $datedenaissancce->format("Y-m-d"),
				"telephone_u" => $_POST["telephone_u"],
				"localisation_u" => $_POST["localisation_u"],
				"email_u" => $_POST["email_u"],
				"identifiant_u" => $_POST["identifiant_u"],
				"mot_passe_u" => sha1($_POST["mot_passe_u"])
			));
		} 
		catch(PDOException $e) {echo $e->getMessage();}

            $_SESSION['identifiant_u'] = $_POST['identifiant_u'];
			    echo "<h1>".$_SESSION['identifiant_u'].", Vous êtes désormais inscrit sur <em>Jamais sans ma pomme</em></h1>";
                echo '</br>';
    }

	

?>