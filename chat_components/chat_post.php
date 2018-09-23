<?php


	include("../part/header.php");

	$req = $bdd->prepare("INSERT INTO message (message_content,id_message_owner) VALUES(?,?)");
	$req->execute(array($_POST['message'], $_SESSION['userId']));

header('Location: index.php');

include("../part/footer.php");
?>