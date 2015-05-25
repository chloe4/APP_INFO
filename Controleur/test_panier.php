<?php
/*if(!empty($_SESSION['panier']))
{
// on extrait les id du panier
$id_liste=implode(',',array_keys($_SESSION['panier']));
}

// on fait notre requête
$req="select id,designation,prix from articles where id IN(".$id_liste.")";
$res=mysql_query($req);

// on boucle les infos retenues
while($data=mysql_fetch_assoc($res))
{
// on clacule nos montants pour chaque article
$montant=$_SESSION['panier'][$id]*$data['prix'];

// on affiche chaque ligne (avec une mise en page et du html bien sûr)
echo $data['designation'],' - ',$_SESSION['panier'][$id],' - '$data['prix'],' - ',$montant'<br />';

// on additionne les montants pour notre total final
$total+=$montant;
}
echo 'Total du panier : ',$total;
*/?>




 <?php
session_start();
/* Initialisation du panier */
$_SESSION['panier'] = array();
/* Subdivision du panier */
$_SESSION['panier']['id_article'] = array(); 
$_SESSION['panier']['quantite'] = array();
$_SESSION['panier']['montant'] = array();

/* Article exemple */
$select = array();
$select['id'] = "phlevis501";
$select['qte'] = 2;
$select['taille'] = "56";
$select['prix'] = 84.95;

/* On vérifie l'existence du panier, sinon, on le crée */
if(!isset($_SESSION['panier']))
{
    /* Initialisation du panier */
    $_SESSION['panier'] = array();
    /* Subdivision du panier */
    $_SESSION['panier']['qte'] = array();
    $_SESSION['panier']['taille'] = array();
    $_SESSION['panier']['prix'] = array();
}

/* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
array_push($_SESSION['panier']['id_article'],$select['id']);
array_push($_SESSION['panier']['qte'],$select['qte']);
array_push($_SESSION['panier']['taille'],$select['taille']);
array_push($_SESSION['panier']['prix'],$select['prix']);

/* Affichons maintenant le contenu du panier : */
?>
<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>


