
<div class="chat_room">
	
	<span>
		
		<span><?php echo "Votre pseudo est: ".$_SESSION["pseudo"].""; ?></span>
	</span>


<form action="chat_post.php" method="post">
	<span>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
	</span>
	
	<input type="submit" value="Envoyer" />
   </form>