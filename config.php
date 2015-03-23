<?php
session_start();

//print_r($_POST); 
//Vérification si nom, prenom, datedenaissance, adresse, telephone, pseudo, mot de passe et email existe !
	if (isset($_POST["nom_u"])&&
		isset($_POST["prenom_u"])&&
		isset($_POST["date_naissance_u"])&&
		isset($_POST["telephone_u"])&&
		isset($_POST["identifiant_u"])&&
		isset($_POST["mot_passe_u"])&&
		isset($_POST["motdepasse2"])&&
			$_POST["mot_passe_u"] == $_POST["motdepasse2"]&&
		isset($_POST["email_u"])
		) {

$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
$request = $db->prepare("INSERT INTO `utilisateur`(`nom_u`, `prenom_u`, `date_naissance_u`,`telephone_u`, `identifiant_u`,`mot_passe_u`, `email_u`) VALUES (:nom_u,:prenom_u,:date_naissance_u,:telephone_u,:identifiant_u,:mot_passe_u,:email_u);");
$request->execute(array(
	"nom_u" => $_POST["nom_u"],
	"prenom_u" => $_POST["prenom_u"],
	"date_naissance_u" => $_POST["date_naissance_u"],
	"telephone_u" => $_POST["telephone_u"],
	"identifiant_u" => $_POST["identifiant_u"],
	"mot_passe_u" => sha1($_POST["mot_passe_u"]),
	"email_u" => $_POST["email_u"]
));

}

?>