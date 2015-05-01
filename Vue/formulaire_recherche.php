<!DOCTYPE html>

<?php 
include('C:\wamp\www\APP_INFO\Modele\recherche_php.php');
 ?>

<?php 
include('C:\wamp\www\APP_INFO\Vue\simpleuh.php');
 ?>

<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
<label for="query"><p style ="front-size:40px;font-family:across the stars;color:yellow">Entrer votre recherche</label>
<input type="search" name="query" maxlength="100" size ="30" id="query"/></br>

Rechercher au niveau de :
<select name="filtre">

	<option value="Site entier">Site entier </option>
	<!--<option value="Blog">Blog </option>
	<option value="Pages">Pages </option>-->
<input type ="submit" value="Rechercher">
</form>
<?php echo $resultats;?>
</body>


</html>