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
                echo "FAUX !";
            }
            else{
                echo "VRAI !";
            }
            /* dans ce cas, tout est ok, on peut démarrer notre session

            on la démarre :)
            session_start ();
            on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['identifiant_u'] = $_POST['identifiant_u'];
            $_SESSION['mot_passe_u'] = $_POST['mot_passe_u'];

            on redirige notre visiteur vers une page de notre section membre
            echo 'vous êtes bien logué';
            }*/

    }
















/*$link = 'mysql_connect('localhost','root','')' ;// pour pas répéter mysql...

if(!$link){
    die('Not connected: '.mysql_error());// si co ne se fait pas : not connected 
}

$db_selected = 'mysql_select_db('jsmp', $link)';

if(!$db_selected){
	die('base inaccessible: '.mysql_error());
}


*/
?>
