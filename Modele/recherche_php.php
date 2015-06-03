<?php
//Initialisation de la variable contenant les résultats
	$resultats=""; 
	if(isset($_POST['query'])&& !empty($_POST['query'])){// traiter requète
		//si l'utilisateur rentre qqchose on traite sa requete
		//on rend clean la requète de l'utilisateur 
		//$query = preg_replace("#[^a-z ?0-9]#i","",$_POST['query']);
		$test = htmlspecialchars($_POST['query']);
		
		// connexion à la base de donnée 
		$db = new PDO("mysql:host=localhost;dbname=jsmp","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="SELECT COUNT(nom_a) FROM articles WHERE nom_a LIKE '%".$test."%' ";
		
		// prépare requète à l'éxécution & retourne un objet 
		$req = $db->prepare($sql);
		$req->execute(array('%'.$test.'%'));
		
		$count = $req->fetchColumn();// Count: fonction d'agrégation ; compte nombre de valeurs  
		if($count >=0){
			echo "".$count. " résultat(s) trouvé(s) pour <strong>".$test."</strong><hr/>";
		    		
			$sql2="SELECT nom_a FROM articles WHERE nom_a LIKE '%".$test."%' ";
			$req2 = $db->prepare($sql2);
			$req2->execute(array('%'.$test.'%'));

	    	while($resultats=$req2->fetch()){
	    		$id=$resultats['nom_a'];
	    		echo "<a href=\"section_produit.php?id=$id\">".$resultats['nom_a']."</a><br/>";
	    	}
		}
		else {
			echo"0 résultat trouvé pour <strong>".$test."</strong><hr/>";
		}
	}

?>