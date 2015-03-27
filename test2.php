    <?php
   




    // On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site


    $identifiant_valide = $_GET['pseudo'];
    $mot_passe_valide = $_GET['motdepasse'];

    $db = new PDO("mysql:host=127.0.0.1;dbname=login","root","");
    $request = $db->prepare("SELECT `pseudo`,`motdepasse` FROM `membres` WHERE `pseudo`=mysql_escape_string($identifiant_valide) AND `motdepasse`=mysql_escape_string($mot_passe_valide) ");



    // on teste si nos variables sont définies
    if (isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($identifiant_valide == $_POST['pseudo'] && $mot_passe_valide == $_POST['motdepasse']) {
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
    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    // puis on le redirige vers la page d'accueil
    echo '<meta http-equiv="refresh" content="0;URL=page_principale_test.php">';
    }
    }
    else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>