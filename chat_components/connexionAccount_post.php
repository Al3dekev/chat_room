<?php
	include("../part/header.php");

	//Verifie si les cases sont bien complétés
	if(isset($_POST['con_email']) && isset($_POST['con_password'])){
			

		include("session.php");

		print_r("TEST: ".$_POST['con_email']."");

		$bddSearchForExistingAccount = $bdd->query("SELECT * FROM account WHERE email='".$_POST['con_email']."'");

		$userInfos = $bddSearchForExistingAccount->fetch();

		echo $userInfos['email'];

		//Vérifie si les données du compte sont valides et existantes
		if($userInfos['email'] == $_POST['con_email']){
			
			//pas de Hash MD5 pour l'instant, vérifie le mdp ici
			if($userInfos['password'] == $_POST['con_password']){
				
				settingSession($userInfos['pseudo'],$userInfos['email'],$userInfos['id']);
				//renvoi a l'accueil quand tout est ok
				header('Location: index.php');
				
			} else{
				?>	
				<div>email ou mdp incorrect!</div>
				<?php	
				// myTimer(5);
				// header('Location: index.php');
			}
		}else{
			?>	
			<div>email ou mdp incorrect!</div>
			<?php	
			// myTimer(5);
			// header('Location: index.php');
		}
		
	} else{
		?>	
		<div>Veuillez remplir tout les champs!</div>
		<?php	
		// myTimer(5);
		// header('Location: index.php');
	}
		
include("../part/footer.php");
?>