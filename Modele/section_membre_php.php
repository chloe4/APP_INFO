<?php 
    $db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_SESSION['identifiant_u'];
    // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
    $sql = "SELECT * FROM utilisateur WHERE identifiant_u = '$id'";
    // Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
    // Du coup "query" directement
    $request = $db->query($sql);

    // On rentre ces données dans un tableau
    $request->execute(array("nom_u"));
    while ($tableau = $request->fetch()){
        $prenom = $tableau['prenom_u'];
        $nom = $tableau['nom_u'];
        $localisation = $tableau['localisation_u'];
        $telephone = $tableau['telephone_u'];
        $email = $tableau['email_u'];
    }
?>