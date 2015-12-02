<form action="form_host.php" method="post">
	<fieldset>
		<label for="host[firstname]">Votre nom : </label>
		<input type="text" placeholder="Votre nom" name="host[firstname]" />
		<br />
		<label for="host[lastname]">Votre prénom : </label>
		<input type="text" placeholder="Votre prénom" name="host[lastname]" />
		<br />
		<label for="host[email]">Votre email : </label>
		<input type="email" placeholder="Votre Email" name="host[email]" />
		<br />
		<input type="submit" name="action[submit]" value="Envoyer" />
	</fieldset>
</form>