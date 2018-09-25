<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/chat_room/bin/myTimer.php");
	include($_SERVER['DOCUMENT_ROOT']."/chat_room/bin/connexionBDD.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mini-chat</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
        <script src="../script/jquery-3.3.1.min.js"></script>
    </head>
    <body>