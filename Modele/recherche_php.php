<?php
//Initialisation de la variable contenant les résultats
	$resultats="";
	$nbreParametres=2;// nbr de para à renseigner 
	if(isset($_POST['query'])&& !empty($_POST['query'])){// traiter requète
		//si l'utilisateur rentre qqchose on traite sa requete
		//on rend clean la requète de l'utilisateur 
		$query = preg_replace("#[^a-z ?0-9]#i","",$_POST['query']);

		if($_POST['filtre']=="Site entier"){
			$sql="(SELECT fruit_title AS title FROM fruit WHERE fruit_title LIKE ? OR fruit_content LIKE ?)UNION(SELECT legume_title AS title FROM legumes WHERE legume_title LIKE ? OR legume_content LIKE ?)";

			// SELECT...FROM ect : recherche champ
		} 
		else if($_POST['filtre']=="Fruit"){
			$sql="SELECT fruit_title AS title FROM fruit WHERE fruit_title LIKE ? OR fruit_content LIKE ?";
		}
		else if ($_POST['filtre']=="Legumes"){
			$sql="SELECT legume_title AS title FROM legumes WHERE legume_title LIKE ? OR legume_content LIKE ?";
		}
		// connexion à la base de donnée 
		include('C:\wamp\www\APP_INFO\connect_db.php');
		$req = $db->prepare($sql);// prépare requète à l'éxécution & retourne un objet 

		if($nbreParametres==3){
			$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));
		}
		else {
			$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));
		}
		$count = $req->rowCount();// Count: fonction d'agrégation ; compte nombre de valeurs  
		if($count >=1){
			echo"$count résultat(s) trouvé(s) pour <strong>$query</strong><hr/>";
    		while ($data=$req->fetch(PDO::FETCH_OBJ)){
    			// PDO : PHP Data Object : classe définissant une interface pour accéder à une base de données depuis PHP .
    			//PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set 
    			echo '# - Titre:'.$data->title.'<br/>';
    		}
		}
		else {
			echo"0 résultat trouvé pour <strong>$query</strong><hr/>";
		}
	}

?>