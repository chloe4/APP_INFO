<?php

	if (creationPanier()){
		$nbArticles=count($_SESSION['panier']['nom_a']);
		if ($nbArticles <= 0){
			echo "<tr><td>Votre panier est vide </ td></tr>";
		}
		else{
			for ($i=0 ;$i < $nbArticles ; $i++){
		        echo "<tr>";
				echo "<td>".htmlspecialchars($_SESSION['panier']['nom_a'][$i])."</ td>";
				echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
			    echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
			    echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['nom_a'][$i]))."\">XX</a></td>";
			    echo "</tr>";
		    }

			echo "<tr><td colspan=\"2\"> </td>";
		    echo "<td colspan=\"2\">";
		    echo "Total : ".MontantGlobal();
		    echo "</td></tr>";
			echo "<tr><td colspan=\"4\">";
		    echo "<input type=\"submit\" value=\"Rafraichir\"/>";
		    echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
		    echo "</td></tr>";
		}
	}
?>