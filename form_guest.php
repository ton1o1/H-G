<form action="form_guest.php" method="post">
	<fieldset>
		<label for="guest[firstname]">Votre nom : </label>
		<input type="text" placeholder="Votre nom" name="guest[firstname]" />
		<br />
		<label for="guest[lastname]">Votre prénom : </label>
		<input type="text" placeholder="Votre prénom" name="guest[lastname]" />
		<br />
		<label for="guest[email]">Votre email : </label>
		<input type="email" placeholder="Votre Email" name="guest[email]" />
		<br />
		<input type="submit" name="action[submit]" value="Envoyer" />
	</fieldset>
</form>