    <?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['pseudo']) && isset($_SESSION['motdepasse'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre login est '.$_SESSION['pseudo'].' et votre mot de passe est '.$_SESSION['motdepasse'].'.';
    echo '<br />';

    // On affiche un lien pour fermer notre session
    echo '<a href="./deconnexion.php">Déconnexion</a>';
    }
    else {
    echo 'Les variables ne sont pas déclarées.';
    }
    ?>