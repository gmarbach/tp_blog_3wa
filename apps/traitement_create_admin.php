<?php
	$error='';
	$hide='hide';
	if (isset($_POST['title'], $_POST['content']))
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$dateCreation = date('j/m/Y');
		$time = time();
		$author = $_SESSION['login'];

		
		if (strlen($title) < 4)
			$error = 'Titre trop court (4 à 60 caractères)';
		else if (strlen($title) > 63)
			$error = 'Titre trop long (4 à 60 caractères)';
		if (strlen($content) < 3)
			$error = 'contenu trop court (4 à 250 caractères)';
		else if (strlen($content) > 251)
			$error = 'contention trop longue (4 à 250 caractères)';
		
		if (empty($error))
		{
			$insert = "INSERT INTO articles (titre, contenu, autheur, date_creation) VALUES ("$title", "$content", "$author", "$dateCreation")";
			$res = mysqli_query($link,$insert);
		}
		
	}
?>