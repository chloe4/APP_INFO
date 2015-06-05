<?php session_start() ?>
<!DOCTYPE html>

	<html>

		<?php include('C:\wamp\www\APP_INFO\Vue\simpleuh.php'); ?>
		<h1>So fresh , so French! </h1>
		<p style="font-size:23px"> Bienvenue sur Jamais sans ma pomme , site de vente & d'échange de fruits & légumes.</br>
			Vous aussi venez faire partie de cette grande aventure !</br>
			Devenez acheteur , vendeur , échangeur !</p>

		<!-- tableau taille 5*2 avec des images -->	
		<center>
			<table border="0px">
				<thead>
					<th colspan="2"><p>Pour commencer : un fruit ou un légume ? </p></th>
				</thead>	
				<td><a href="#"/><img src="http://www.holisticvanity.ca/wp-content/uploads/2013/08/fruit.jpg"/></td>
				<td><a href="#"/><img src="http://glsa.ro/wp-content/uploads/2014/04/legume.jpg"/></a></td>						
				</tr>												
				</tbody>			
			</table>
		</center>
			</br>
			<?php include('C:\wamp\www\APP_INFO\Modele\nouveautes_php.php'); ?>
		<!--code pour horloge-->
		<div id="div_horloge"></div>
 
		<script type="text/javascript">
			window.onload=function(){ horloge('div_horloge');};
 
			function horloge(el){
  				if(typeof el=="string"){ el = document.getElementById(el); }
  			
  				function actualiser(){
				    var date = new Date();
				    var str = date.getHours();
				    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
				    str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
				    el.innerHTML = str;
	  			}
  				actualiser();
  				setInterval(actualiser,1000);
			}
		</script>
		
			<?php include('bandeau_bas.php'); ?>
	 		
	</html>