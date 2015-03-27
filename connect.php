<?php 
$link = 'mysql_connect('localhost','root','')' ;// pour pas répéter mysql...

if(!$link){
    die('Not connected: '.mysql_error());// si co ne se fait pas : not connected 
}

$db_selected = 'mysql_select_db('jsmp', $link)';

if(!$db_selected){
	die('base inaccessible: '.mysql_error());
}



?>
