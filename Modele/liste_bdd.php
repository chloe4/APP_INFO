<?php

// On se connecte à la base de données via la fonction PDO
		include('connect_db.php');
		$sql = "SELECT nom_a FROM `jsmp`.`articles`";
		$request = $db->prepare($sql);
		$request->execute(array(
			"nom_a" => "",
			));
		while ($tableau = $request->fetch()){
			$prod = $tableau['nom_a'];
		}

		echo '<p> Quel produit voulez-vous vendre ?<br/>
            <select name="nom_a" id="produit">
                <option value="fruit">'; echo $prod; echo '</option>
            </select></br>';                         
?>