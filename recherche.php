<?php
//Initialisation de la variable contenant les résultats
$resultats="";
$nbreParametres=2;// nbr de para à renseigner 
if(isset($_POST['query'])&& !empty($_POST['query'])){// traiter requète
	//si utili rentre qqchose on traite sa requete
	//on rend clean la requète de l'utilisateur 

$query = preg_replace("#[^a-z ?0-9]#i","",$_POST['query']);

if($_POST['filtre']=="Site entier"){
	$sql="(SELECT id,blog_title AS title FROM blog WHERE blog_title LIKE ? OR blog_content LIKE ?)UNION(SELECT id,page_title AS title FROM pages WHERE page_title LIKE ? OR page_content LIKE ?)";

// SELECT...FROM ect : recherche champ

} else if($_POST['filtre']=="Blog"){
	 $sql="SELECT id,blog_title AS title FROM blog WHERE blog_title LIKE ? OR blog_content LIKE ?";


}else if ($_POST['filtre']=="Pages"){
	$sql="SELECT id,page_title AS title FROM pages WHERE page_title LIKE ? OR page_content LIKE ?";

}
// connexion à la base de donnée 
include('connect_db.php');

$req = $db->prepare($sql);// prépare requète à l'éxécution & retourne un objet 

if($nbreParametres==2){
	$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));

}else {
	$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));

}
$count = $req->rowCount();// Count: fonction d'agrégation ; compte nombre de valeurs  
if($count >=1){
	echo"$count résultat(s) trouvé(s) pour <strong>$query</strong><hr/>";
    while ($data=$req->fetch(PDO::FETCH_OBJ)){// PDO : PHP Data Object : classe définissant une interface pour accéder à une base de données depuis PHP .
    	//PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set 
    	echo '#'.$data->id.'- Titre:'.$data->title.'<br/>';

    }
}else {
	echo"0 résultat trouvé pour <strong>$query</strong><hr/>";
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="Bandeaucss.css"/>
	<title> Jamais sans ma pomme</title>
	<meta charset="UTF-8"/>
</head>
<body>
			<body background="http://images99.i.m.pic.centerblog.net/v8v99xxn.jpg"/>
<ul id="menu">
	<li><a href="http://localhost/APP_INFO/Bandeau.html">Accueil</a>
		
	</li>
	<li><a href="http://www.mangerbouger.fr/IMG/pdf/inpes_manger_bouger_pdf_produits_saison.pdf">Calendrier</a>
		
	</li>
		<li><a href="#">Acheter/Echanger</a>
		<ul>
			
			<li><a href="http://localhost/APP_INFO/fairemescourses.html#">Nos producteurs</a></li>
			<li><a href="http://localhost/APP_INFO/Nos_produits.html#">Nos produits</a></li>		
		</ul>
		
	</li><li><a href="#">Des infos !</a>
		<ul>
			
			<li><a href="http://localhost/APP_INFO/Qui_somme_nous.html#">Qui sommes-nous</a></li>
			<li><a href="http://localhost/APP_INFO/Contact.html#">Contact</a></li>		
		</ul>
	</li><li><a href="#">Mon panier</a>
		<ul>
			<li><a href="http://localhost/APP_INFO/panier.php">En cours</a></li>
			<li><a href="#">Avant</a></li>	
		</ul>
	</li>
	</li><li><a href="http://localhost/APP_INFO/recherche.php#">Rechercher</a>	
	</li>
	</li><li><a href="#">Nous rejoindre !</a>
		<ul>
			<li><a href="http://localhost/APP_INFO/formulaire_inscription.php#">S'inscire</a></li>
			<li><a href="http://localhost/APP_INFO/formulaire_connexion.php#">Se connecter</a></li>			
		</ul>
	</li>
</ul>

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