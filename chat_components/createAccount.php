<div ID="createAccount" class="mainPageBlock">

	<span>ou creez-vous un compte:</span>

	<form action="chat_components/createAccount_post.php" method="post">
		<span>
			<label>pseudo: <label>
			<input type="text" name="cre_pseudo" id="pseudonyme" required>
		</span>
		
		<span>
			<label>email: <label>
			<input type="email" name="cre_email" id="cre_email" required>
		</span>
		
		<span>
			<label>Mot de Passe: <label>
			<input type="password" name="cre_password" id="cre_password" required>
		</span>
		
			<input type="submit" value="Envoyer">
	</form>
</div>