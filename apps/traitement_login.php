<?php
	$error='';
	if (isset($_POST['login'], $_POST['pass']))
	{
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		$users = array();
		$i = 0;
		$userlist = fopen('users.json', 'r');
		if ($userlist !== false)
		{
			while (($data = (fgets($userlist))) !== false)
			{
				$user = json_decode($data);
				$users[$i] = $user;
				$i++;
			}
			fclose($userlist);
			$i = 0;
			while ($i < count($users))
			{
				if ($users[$i][3] == $login)
				{
					if ($users[$i][4] == $pass)
					{
						$_SESSION['login'] = $login;
						header('Location: index.php?page=home');
						exit;
					}
					else
						$error = 'Mot de passe invalide';
				}
				$i++;
			}
			$error = 'Utilisateur non trouvé';
		}
		$error = 'Erreur interne';
	}
?>