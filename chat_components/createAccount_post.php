<?php

	include($_SERVER['DOCUMENT_ROOT']."/chat_room/part/header.php");

	if(isset($_POST['cre_email']) && isset($_POST['cre_password']) && isset($_POST['cre_pseudo'])){
	    /*if($_POST['cre_email'] = ""){
	        echo "champs vides ! <a href='localhost'>retour accueil</a>";
        }*/
			
		include($_SERVER['DOCUMENT_ROOT']."/chat_room/bin/session.php");
		
		// prevois generation l'ID avec ROUND((RAND() * (500-1))+1);
		$req = $bdd->prepare("INSERT INTO `account` (`pseudo`, `email`, `password`) VALUES (?,?,?)");
		$req->execute(array($_POST['cre_pseudo'], $_POST['cre_email'], $_POST['cre_password']));
		
		$req2 = $bdd->query("SELECT * FROM account WHERE email = '".$_POST['cre_email']."'");
		$arrayed = $req2->fetch();


        settingSession($arrayed['pseudo'],$arrayed['email'],$arrayed["id"]);
		header('Location: ../index.php');
		
	}else{
	    echo "marche pas <a href='localhost'>retour accueil</a>";
	//header('Location: index.php');
	}
		

		include($_SERVER['DOCUMENT_ROOT']."/chat_room/part/footer.php");
		
?>