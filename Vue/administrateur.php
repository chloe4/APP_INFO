<?php session_start() ?>

	<!DOCTYPE html>

		<html>

			<?php include('simpleuh.php'); ?>
				<h2>Espace administrateur</h2>

				<p><strong>Administration Système</strong></br>
					<ul>
						<li>Accès</li>
						<li>Configuration</li>
					</ul>
				</p>
				
				<div id="trait"></div>
				<p><strong>Gestion utilisateurs et droits</strong></br>
					<ul>
						<li><a href="liste_membres.php">Gestion des membres</a></li>
						<li>Contact</li>
					</ul>
				</p>
				
				<div id="trait"></div>

				<?php include('bandeau_bas.php'); ?>

	</html>
