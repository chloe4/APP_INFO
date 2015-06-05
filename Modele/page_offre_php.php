
<?php include('C:\wamp\www\APP_INFO\Modele\connect_db.php');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
    $sql = "SELECT * FROM offre";
	// Pas la peine de préparer la requête, pas de données récupéré depuis l'utilisateur
	// Du coup "query" directement
	$request = $db->query($sql);

        // On rentre ces données dans un tableau
    $request->execute(array("identifiant_u", "nom_a", "quantite_intiale_lo", "prix_unitaire_lo"));
 	while ($tableau = $request->fetch()){
 		$ref = $tableau['identifiant_u'];
 		$nom = $tableau['nom_a'];
 		$quantite = $tableau['quantite_initiale_lo'];
 		$prix = $tableau['prix_unitaire_lo'];

 		if($ref==$_GET['id']){
	        echo "Utilisateur : ".$ref."    vend   ";
	   		echo "Produit : ".$nom."    pour    ";
	        echo "Quantité : ".$quantite."    à    ";
	   		echo "Prix unitaire : ".$prix."</br>";
       		if($ref!=$_SESSION['identifiant_u']){
        		echo 	'<form action="javascript.php" method="post">
        				<input type="submit" name="redirection" Value="S inscrire"/>
       					</form></br>';
   			}
        }     			
   	}
?>