<?php 

    //On teste si nos variables sont bien définies
    if (isset($_POST["identifiant_u"]) && isset($_POST["mot_passe_u"])) {

    	// On se connecte à la base de données via la fonction PDO
        $db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
        $sql = "SELECT `mot_passe_u`,identifiant_u FROM `jsmp`.`utilisateur` WHERE identifiant_u = :identifiant_u AND mot_passe_u = :mot_passe_u";
        $request = $db->prepare($sql);

        // On rentre ces données dans un tableau
        $request->execute(array(
            "identifiant_u"=>$_POST["identifiant_u"],
            "mot_passe_u"=>$_POST["mot_passe_u"]
        ));
        
        // On recurpère ces données dans le tableau sous la forme d'une chaine de caractères
        $tableau = $request->fetch();
        echo $tableau["identifiant_u"].'</br>';
        echo $tableau["mot_passe_u"].'</br>';
        $pseudo = $tableau["identifiant_u"];
        $motdepasse = $tableau["mot_passe_u"];

        	// On vérifie que les données sont similaires dans la base de données et dans les champs remplis par l'utilisateur
            if ($pseudo!= $_POST['identifiant_u'] || $motdepasse!= $_POST['mot_passe_u']) {
                echo "Votre mot de passe ou votre identifiant est erroné. Veuillez réessayer !";
            }
            else { //Vous avez été reconnu, nous pouvons démarrer la session
                echo "Vous êtes bien logué";
                session_start ();
                $_SESSION['identifiant_u'] = $_POST['identifiant_u'];
            	$_SESSION['mot_passe_u'] = $_POST['mot_passe_u'];
            	header ('location: C:\wamp\www\APP_INFO\Vue\section_membre.php');
            }
    }
?>
