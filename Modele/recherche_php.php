<?php
//Initialisation de la variable contenant les résultats
	$resultats="";
	//$nbreParametres=1;// nbr de para à renseigner 
	if(isset($_POST['query'])&& !empty($_POST['query'])){// traiter requète
		//si l'utilisateur rentre qqchose on traite sa requete
		//on rend clean la requète de l'utilisateur 
		$query = preg_replace("#[^a-z ?0-9]#i","",$_POST['query']);
		$test = $_POST['query'];
		//if($_POST['filtre']=="Site entier"){
			//$sql="(SELECT nom_a AS title FROM articles WHERE (nom_a LIKE '$test' AND type_a == 0) OR description_a LIKE '$test') UNION 
			//(SELECT nom_a AS title FROM articles WHERE (nom_a LIKE '$test' AND type_a == 1) OR description_a LIKE '$test')";

			// SELECT...FROM ect : recherche champ
		//} 
		//else if($_POST['filtre']=="Fruit"){
		//}
		//else if ($_POST['filtre']=="Legumes"){
		//	$sql="SELECT nom_a AS title FROM articles WHERE (nom_a LIKE '$test' AND type_a == 1) OR description_a LIKE $test";
		//}
		// connexion à la base de donnée 
		$db = new PDO("mysql:host=localhost;dbname=jsmp","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql='SELECT nom_a FROM articles WHERE nom_a LIKE "%$test%" ';

		$req = $db->prepare($sql);
		// prépare requète à l'éxécution & retourne un objet 
		$req->execute(array("nom_a"=>"%$test%"));
		$tableau = $req->fetch();
        echo $tableau["nom_a"].'</br>';
		/*if($nbreParametres==3){
			$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));
		}
		else {
			$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));
		}*/
		$count = $req->rowCount();// Count: fonction d'agrégation ; compte nombre de valeurs  
		if($count >=0){
			echo "a";
			echo "".$count. "résultat(s) trouvé(s) pour <strong>".$query."</strong><hr/>";
    		while ($resultats=$req->fetch(PDO::FETCH_OBJ)){
    			// PDO : PHP Data Object : classe définissant une interface pour accéder à une base de données depuis PHP .
    			//PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set 
    			echo '# - Titre:'.$resultats.'<br/>';
    		}
		}
		else {
			echo"0 résultat trouvé pour <strong>".$query."</strong><hr/>";
		}
	}

?>