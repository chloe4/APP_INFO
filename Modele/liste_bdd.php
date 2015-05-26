<?php

// On se connecte à la base de données via la fonction PDO
		$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","root");
		$sql = "SELECT nom_a, varietes_a FROM `jsmp`.`articles`";
		$request = $db->prepare($sql);
		$request->execute(array(
			"nom_a" => "",
			"varietes_a" => "",
			));
		while ($tableau = $request->fetch()){
			$prod = $tableau['nom_a'];
			$var = $tableau['varietes_a'];
		}

		echo '<p> Quel produit voulez-vous vendre ?<br/>
            <select name="nom_a" id="produit">
              <optgroup label="Fruits">
                <option value="fruit">'; echo $prod; echo '</option>
              </optgroup>
              <optgroup label="Légumes">
               <option value="poireau">poireau</option>
               <option value="poivron">poivron</option>
              </optgroup>
            </select></br>
              Variétés :  <select name="varietes_a" id="variete">
                            <option value="fruit">'; echo $var; echo '</option>
                          </select></br>';

                         
?>