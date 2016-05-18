<?php
	$error='';
	if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'],$_POST['login'], $_POST['pwd'], $_POST['pwd2']))
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];
		$pwd2 = $_POST['pwd2'];
		if (strlen($nom) < 3)
			$error = 'Nom trop court (3 à 32 caractères)';
		else if (strlen($prenom) > 32)
			$error = 'Prénom trop long (3 à 32 caractères)';
		if (strlen($prenom) < 3)
			$error = 'Nom trop court (3 à 32 caractères)';
		else if (strlen($prenom) > 32)
			$error = 'Nom trop long (3 à 32 caractères)';
		if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) == false)
			$error = 'Email non valide';
		if (strlen($login) < 3)
			$error = "Nom d'utilisateur trop court (3 à 32 caractères)";
		else if (strlen($login) > 32)
			$error = "Nom d'utilisateur trop long (3 à 32 caractères)";
		if (strlen($pwd) < 4)
			$error = 'Mot de passe trop court (4 à 32 caractères)';
		else if (strlen($pwd) > 32)
			$error = 'Mot de passe trop long (4 à 32 caractères)';
		if ($pwd != $pwd2)
			$error = 'Revérifiez le mot de passe';
		if (empty($error))
		{



$bdd = new PDO('mysql:host=localhost;dbname=blog-3wa','root','troiswa');

$insert = $bdd -> prepare('INSERT INTO register (nom,prenom,mail,login,pwd) VALUES (?,?,?,?,?)');

$insert -> execute(array($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['login'],$_POST['pwd']));



header('Location:index.php?page=login');



		}
	}
?>