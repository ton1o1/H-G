<form action="form_lodging.php" method="post">
	<fieldset>
		<label for="lodging[address1]">Adresse : </label>
		<input type="text" placeholder="N° Rue, Ville" name="lodging[firstname]" />
		<br />
		<label for="lodging[zip]">Code Postal : </label>
		<input type="text" placeholder="Code Postal" name="lodging[firstname]" />
		<br />
		<label for="lodging[digicode]">Code d'entrée : </label>
		<input type="text" placeholder="Code d'entrée" name="lodging[digicode]" />
		<br />
		<input type="submit" name="action[submit]" value="Envoyer" />
	</fieldset>
</form>