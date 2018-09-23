<?php

function settingSession($pseudo,$email,$userId){


	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['email'] = $email;
	$_SESSION['userId'] = $userId;
	
}
	
	?>