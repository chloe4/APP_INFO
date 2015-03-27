

<?php

    //On test si nos variables sont bien définies
    if (isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {

        //On insère les données dans un tableau
        

        $db = new PDO("mysql:host=127.0.0.1;dbname=login","root","");
        $request = $db->prepare("SELECT `pseudo`,`motdepasse` FROM `membres` WHERE `pseudo`=mysql_escape_string('$pseudo') AND `motdepasse`=mysql_escape_string('motdepasse') ");
    
            // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
            if ('pseudo' == $_POST['pseudo'] && 'motdepasse' == $_POST['motdepasse']) {
            // dans ce cas, tout est ok, on peut démarrer notre session

            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['motdepasse'] = $_POST['motdepasse'];

            // on redirige notre visiteur vers une page de notre section membre
            header ('location: test3.php');
            }
            else {
            // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
            echo 'OUPS';
            //'<body onLoad="alert(\'Membre non reconnu...\')">';
            // puis on le redirige vers la page d'accueil
            //echo '<meta http-equiv="refresh" content="0;URL=page_principale_test.php">';
            }}


   