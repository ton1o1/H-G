<?php
require_once 'pdo.php';

if ( $_POST ) {

	session_start();

	// Sauvegarde temporaire des valeurs saisies par l'user
	foreach($_POST['login'] as $key => $value){
		$_SESSION['form']['login'][$key] = $value;
	}

	if ( !empty($_POST['login']['submit']) ) {
		
		if ( !empty($_POST['login']['email']) && !empty($_POST['login']['password']) ) {

			$statement = $pdo->prepare('SELECT * FROM :who WHERE email = :email;');
			$statement->execute([
				':who' => $_POST['login']['who'],
				':email' => $_POST['login']['email'],
			]);
			$users = $statement->fetchAll();
			
			if ( $users ) {
				
				if ( password_verify($_POST['login']['password'], $users[0]['password']) ) {
					
					session_start();
					$_SESSION['auth'] = $users[0];
					die(header('Location: ./' . ( !empty($_POST['action']['next']) ? $_POST['action']['next'] : '' ) ));

				} else $_SESSION['error'] = "Mot de pase invalides !";

			} else $_SESSION['error'] = "Email erroné.";

		} else $_SESSION['error'] = "Tous les champs doivent être remplis.";

	} else $_SESSION['error'] = "Le formulaire n'a pas été correctement validé.";

}

?>