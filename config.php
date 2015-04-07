<?php
session_start();

//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_u"])&&
		isset($_POST["prenom_u"])&&
		isset($_POST["date_naissance_u"])&&
		isset($_POST["telephone_u"])&&
		isset($_POST["email_u"])&&
		isset($_POST["identifiant_u"])&&
		isset($_POST["mot_passe_u"])&&
		isset($_POST["motdepasse2"])&& $_POST["mot_passe_u"] == $_POST["motdepasse2"]
		)
	{

		// On se connecte à la base de données
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
		
		// echo "a"; (pour faire des tests)
		
		$request = $db->prepare("INSERT INTO `jsmp`.`utilisateur` (`nom_u`,`prenom_u`,`date_naissance_u`,`telephone_u`,`email_u`,`identifiant_u`,`mot_passe_u`) VALUES (:nom_u,:prenom_u,:date_naissance_u,:telephone_u,:email_u,:identifiant_u,:mot_passe_u);");
		
		// print_r($_POST); (pour faire des tests, afficher le nom, prénom,..., mot de passe)
		
		// permet de prendre la date sous un certain format : ici le format est DD/MM/AAAA
		$datedenaissancce = DateTime::createFromFormat('d/m/Y',$_POST['date_naissance_u']);

		// Si erreur, affiche l'erreur - permet "d'attraper" l'erreur
		try {
			// echo "b"; (permet de faire des tests)
			$request->execute(array(
				"nom_u" => $_POST["nom_u"],
				"prenom_u" => $_POST["prenom_u"],
				//Permet de transformer le format de la date pour que la base de données puisse le comprendre
				"date_naissance_u" => $datedenaissancce->format("Y-m-d"),
				"telephone_u" => $_POST["telephone_u"],
				"email_u" => $_POST["email_u"],
				"identifiant_u" => $_POST["identifiant_u"],
				"mot_passe_u" => sha1($_POST["mot_passe_u"])
			));
		
			// echo "c"; (pour faire des tests)
		
		} 
		catch(PDOException $e) {
			echo $e->getMessage();
		}

	}


?>