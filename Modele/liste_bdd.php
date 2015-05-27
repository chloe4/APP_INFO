<?php
	include('connect_db.php');
	$sql = "SELECT nom_a FROM `jsmp`.`articles`";
	$request = $db->prepare($sql);
	$request->execute(array("nom_a" => "",));
	while ($tableau = $request->fetch()){
		$prod = $tableau['nom_a'];
?>
<option value="<?php echo $prod; ?>"> <?php echo $prod; ?></option>
<?php } ?>
 	
