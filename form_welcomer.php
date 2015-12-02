<form action="form_welcomer.php" method="post">
	<fieldset>
		<label for="welcomer[firstname]">Votre nom : </label>
		<input type="text" placeholder="Votre nom" name="welcomer[firstname]" />
		<br />
		<label for="welcomer[lastname]">Votre prénom : </label>
		<input type="text" placeholder="Votre prénom" name="welcomer[lastname]" />
		<br />
		<label for="welcomer[email]">Votre email : </label>
		<input type="email" placeholder="Votre Email" name="welcomer[email]" />
		<br />
		<input type="submit" name="action[submit]" value="Envoyer" />
	</fieldset>
</form>