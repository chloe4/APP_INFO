<?php

    //On test si nos variables sont bien définies
    if (isset($_POST["pseudo"]) && isset($_POST["motdepasse"])) {

        //On insère les données dans un tableau
        

        $db = new PDO("mysql:host=127.0.0.1;dbname=login","root","");
        $sql = "SELECT `motdepasse` FROM `membres` WHERE `pseudo`= {$_POST['pseudo']}";
        $request = $db->prepare($sql);

        $request->execute();
 
        var_dump($request->execute());


        $data = mysql_fetch_assoc($request);
        

        // on fait une boucle qui va faire un tour pour chaque enregistrement
       
       
        // on affiche les informations de l'enregistrement en cours
         


            // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
            if ($data['nom']!= $_POST['motdepasse']) {
                echo "FAUX !";
            }
            else{
            // dans ce cas, tout est ok, on peut démarrer notre session

            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['motdepasse'] = $_POST['motdepasse'];

            // on redirige notre visiteur vers une page de notre section membre
            echo 'vous êtes bien logué';
            }
    }