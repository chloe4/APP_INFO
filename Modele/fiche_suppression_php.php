<?php
    if(isset($_GET["id"])){
        $barre = $_GET["id"];
        echo $barre;

        include('connect_db.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM utilisateur WHERE identifiant_u = '$barre'";
        $request = $db->query($sql);
        // On rentre ces données dans un tableau
        $request->execute(array("nom_u"));
        while ($tableau = $request->fetch()){
            $identifiant = $tableau["identifiant_u"];
            $nom = $tableau["nom_u"];
            $prenom = $tableau["prenom_u"];
            $email = $tableau["email_u"];
            $localisation = $tableau['localisation_u'];
            $telephone = $tableau['telephone_u'];
        }
        if(isset($_POST['suppr'])){
            $sql = "DELETE FROM utilisateur WHERE identifiant_u = '$barre'";
            $request = $db->query($sql);
            echo "Suppr";
        }
    }
?>