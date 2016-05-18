<?php
	$error='';
	if (isset($_POST['firstName'], $_POST['surname'], $_POST['mail'],$_POST['login'], $_POST['pass'], $_POST['passConfirm']))
	{
		$firstName = $_POST['firstName'];
		$surname = $_POST['surname'];
		$mail = $_POST['mail'];
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		$passConfirm = $_POST['passConfirm'];
		if (strlen($firstName) < 3)
			$error = 'Prénom trop court (3 à 32 caractères)';
		else if (strlen($firstName) > 32)
			$error = 'Prénom trop long (3 à 32 caractères)';
		if (strlen($surname) < 3)
			$error = 'Nom trop court (3 à 32 caractères)';
		else if (strlen($surname) > 32)
			$error = 'Nom trop long (3 à 32 caractères)';
		if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) == false)
			$error = 'Email non valide';
		if (strlen($login) < 3)
			$error = "Nom d'utilisateur trop court (3 à 32 caractères)";
		else if (strlen($login) > 32)
			$error = "Nom d'utilisateur trop long (3 à 32 caractères)";
		if (strlen($pass) < 4)
			$error = 'Mot de passe trop court (4 à 32 caractères)';
		else if (strlen($pass) > 32)
			$error = 'Mot de passe trop long (4 à 32 caractères)';
		if ($pass != $passConfirm)
			$error = 'Revérifiez le mot de passe';
		if (empty($error))
		{
			$user = array($firstName, $surname, $mail, $login, $pass);
			$userlist = fopen('users.json', 'a');
			if ($userlist !== false)
			{
				$res1 = fwrite($userlist, json_encode($user, JSON_UNESCAPED_UNICODE));
				$res2 = fclose($userlist);
				if ($res1 !== false && $res2 !== false)
				{
					header('Location: index.php?page=login');
					exit;
				}
			}
			$error ='Erreur interne';
		}
	}
?>