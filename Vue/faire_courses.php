<?php session_start() ?>
<!DOCTYPE html>

	<html>
<?php include('C:\wamp\www\APP_INFO\Modele\redirection.php'); ?>
		<?php include('simpleuh.php'); ?>
		
		<section id="mesproducteursfavoris">
		<h1> Localisez vous </h1>
		<div>
			<h4> Mes producteurs favoris </h4>
			<ul id="prod"> 
				<li> <a href ="ProdCaroline.php"> Caroline Nopper </a></li>
				<li> <a href ="ProdAlice.php"> Alice Samaran </a></li>
				<li> <a href ="ProdCome.php"> Côme Schechter </a></li>
				<li> <a href ="ProdXavier.php"> Xavier Gouesnard </a></li>
				<li> <a href ="ProdChloé.php"> Chloé Van Cauwenberghe </a></li>
			</ul>
		</div>
		</section>

		<?php include('bandeau_bas.php'); ?>
		
	</html>