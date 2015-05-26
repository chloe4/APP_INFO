<?php
    if(isset($_GET["id"])){
   		$produit = $_GET["id"];

		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","root");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
        $sql = "SELECT `nom_u`, prenom_u, email_u FROM utilisateur WHERE nom_u = '$produit'";
        $request = $db->query($sql);
        
        // On recurpère ces données dans le tableau sous la forme d'une chaine de caractères
        $tableau = $request->fetch();
        $nom = $tableau["nom_u"];
        $prenom = $tableau["prenom_u"];
        $email = $tableau["email_u"];
	}
?>