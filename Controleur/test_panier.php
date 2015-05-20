<?php
if(!empty($_SESSION['caddie']))
{
// on extrait les id du caddie
$id_liste=implode(',',array_keys($_SESSION['caddie']));
}

// on fait notre requête
$req="select id,designation,prix from articles where id IN(".$id_liste.")";
$res=mysql_query($req);

// on boucle les infos retenues
while($data=mysql_fetch_assoc($res))
{
// on clacule nos montants pour chaque article
$montant=$_SESSION['caddie'][$id]*$data['prix'];

// on affiche chaque ligne (avec une mise en page et du html bien sûr)
echo $data['designation'],' - ',$_SESSION['caddie'][$id],' - '$data['prix'],' - ',$montant'<br />';

// on additionne les montants pour notre total final
$total+=$montant;
}
echo 'Total du caddie : ',$total;
?>