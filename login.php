<?php

$error = '';

if ( $_POST ) {

	if ( !empty($_POST['action']['connexion']) ) {
		
		if ( !empty($_POST['login']['email']) && !empty($_POST['login']['password']) ) {

			$pdo = include('conf/pdo.php');
			$statement = $pdo->prepare('SELECT * FROM users WHERE email = :email;');
			$statement->execute([
				':email' => $_POST['login']['email'],
			]);
			$users = $statement->fetchAll();
			
			if ( $users ) {
				
				if ( password_verify($_POST['login']['password'], $users[0]['password']) ) {
					
					session_start();
					$_SESSION['auth'] = $users[0];
					die(header('Location: ./' . ( !empty($_POST['action']['next']) ? $_POST['action']['next'] : '' ) ));

				} else $error = "Mot de pase invalides !";

			} else $error = "Email erroné.";

		} else $error = "Tous les champs doivent être remplis.";

	} else $error = "Le formulaire n'a pas été correctement validé.";

}

?>