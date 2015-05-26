<?php 

    //On teste si nos variables sont bien définies
    if (isset($_POST["identifiant_u"]) && isset($_POST["mot_passe_u"])) {
        $mdp = sha1($_POST["mot_passe_u"]);
    	// On se connecte à la base de données via la fonction PDO
        include('connect_db.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
        $sql = "SELECT mot_passe_u,identifiant_u FROM `jsmp`.`utilisateur` WHERE identifiant_u = :identifiant_u AND mot_passe_u = :mot_passe_u";
        $request = $db->prepare($sql);
        $request->bindValue(':mot_passe_u', $mdp, PDO::PARAM_STR);
        // On rentre ces données dans un tableau
        $request->execute(array(
            "identifiant_u"=>$_POST["identifiant_u"],
            "mot_passe_u"=>$mdp
        ));
        
        // On recurpère ces données dans le tableau sous la forme d'une chaine de caractères
        $tableau = $request->fetch();
        //echo $tableau["identifiant_u"].'</br>';
        //echo $tableau["mot_passe_u"].'</br>';
        $pseudo = $tableau["identifiant_u"];
        $motdepasse = $tableau["mot_passe_u"];

        	// On vérifie que les données sont similaires dans la base de données et dans les champs remplis par l'utilisateur
            if ($pseudo!= $_POST['identifiant_u'] || $motdepasse!= $mdp) {
                echo "Votre mot de passe ou votre identifiant est erroné. Veuillez réessayer !";
            }
            else { //Vous avez été reconnu, nous pouvons démarrer la session
                $_SESSION['identifiant_u'] = $pseudo;
                echo "<h3>".$pseudo.", Vous êtes bien connecté.</h3>";
            	
            }
    }
?>
