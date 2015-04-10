<?php

    //On teste si nos variables sont bien définies
    if (isset($_POST["pseudo"]) && isset($_POST["motdepasse"])) {

        //On insère les données dans un tableau
        

        $db = new PDO("mysql:host=127.0.0.1;dbname=login","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT `motdepasse`,pseudo FROM `login`.`membres` WHERE pseudo = :pseudo AND motdepasse = :motdepasse";
        $request = $db->prepare($sql);
        $request->execute(array(
            "pseudo"=>$_POST["pseudo"],
            "motdepasse"=>$_POST["motdepasse"]
            ));
        
        //var_dump($data);

        $tableau = $request->fetch();
           
        echo $tableau["pseudo"].'</br>';
        echo $tableau["motdepasse"].'</br>';
        $pseudo = $tableau["pseudo"];
        $motdepasse = $tableau["motdepasse"];

            if ($pseudo!= $_POST['pseudo'] || $motdepasse!= $_POST['motdepasse']) {
                echo "FAUX !";
            }
            else{
                echo "VRAI !";
            }
            // dans ce cas, tout est ok, on peut démarrer notre session

            // on la démarre :)
            //session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            //$_SESSION['pseudo'] = $_POST['pseudo'];
            //$_SESSION['motdepasse'] = $_POST['motdepasse'];

            // on redirige notre visiteur vers une page de notre section membre
            //echo 'vous êtes bien logué';
           // }
    }