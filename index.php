<?php
	include($_SERVER['DOCUMENT_ROOT']."/chat_room/part/header.php");
		
	?>


    <?php if(!isset($_SESSION['pseudo'])){ //condition pour faire disparaitre les elements de la page de connexion pour faire apparaitre la page de tchat ?>
	<div class="mainBigBlock">
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/chat_room/chat_components/connexionAccount.php");
			include($_SERVER['DOCUMENT_ROOT']."/chat_room/chat_components/createAccount.php");
		?>
	</div>
	<?php } else{ ?>
		<div>
			<?php include($_SERVER['DOCUMENT_ROOT']."/chat_room/chat_components/chat.php"); ?>
		</div>
			<?php
		include("chatHistory.php");
		?>
		<form method="post">
			<input type='submit' name="deco" value='Deconnexion'>
		</form>
        <?php
		if(isset($_POST['deco'])){
			session_destroy();
		} 
    }
 
 
		include($_SERVER['DOCUMENT_ROOT']."/chat_room/part/footer.php");
	?>