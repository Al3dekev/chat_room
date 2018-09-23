<?php


function bdd_connection(){
// Connexion à la base de données
try
{
	global $bdd;
	$bdd = new PDO('mysql:host=localhost;dbname=chat_room;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


}
bdd_connection();

?>