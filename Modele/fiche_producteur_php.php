<?php
    if(isset($_GET["id"])){
        $produit = $_GET["id"];

        include('connect_db.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql2 = "SELECT * FROM utilisateur";
        $request2 = $db->query($sql2);
        // On rentre ces données dans un tableau
        $request2->execute(array("nom_u"));
        while ($tableau2 = $request2->fetch()){
            $test = $tableau2['nom_u'];
        }
        if(isset($_SESSION['identifiant_u'])){
            if ($produit == $test){
                $id = $_SESSION['identifiant_u'];
                // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
                $sql = "SELECT * FROM utilisateur WHERE identifiant_u = '$id'";
            }
            else {
                $sql = "SELECT * FROM utilisateur WHERE nom_u = '$produit'";
            }
            $request = $db->query($sql);        
            // On recurpère ces données dans le tableau sous la forme d'une chaine de caractères
            $tableau = $request->fetch();
            $identifiant = $tableau["identifiant_u"];
            $nom = $tableau["nom_u"];
            $prenom = $tableau["prenom_u"];
            $email = $tableau["email_u"];
            $localisation = $tableau['localisation_u'];
            $telephone = $tableau['telephone_u'];
            $type = $tableau['type_u'];
        }
    }
?>