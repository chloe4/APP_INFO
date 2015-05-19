<?php
    if(isset($_GET["id"])){
   		$produit = $_GET["id"];

		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
        $sql = "SELECT `nom_a`, `description_a`, `photo_a` FROM articles WHERE nom_a = '$produit'";
        $request = $db->query($sql);
        
        // On recurpère ces données dans le tableau sous la forme d'une chaine de caractères
        $tableau = $request->fetch();
        $nom = $tableau["nom_a"];
        $description = $tableau["description_a"];
        $photo = $tableau["photo_a"];
	}
?>