<?php
	$error='';
	
	if (isset($_POST['title'], $_POST['content'], $_GET['artId'], $_SESSION['id']))
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		$idArticle= $_GET['artId'];

		$idUser= $_SESSION['id'];



		
		if (strlen($title) < 4)
			$error = 'Titre trop court (4 à 60 caractères)';
		else if (strlen($title) > 63)
			$error = 'Titre trop long (4 à 60 caractères)';
		if (strlen($content) < 3)
			$error = 'contenu trop court (4 à 250 caractères)';
		else if (strlen($content) > 2047)/** Pascal : Taille dans la db : 2047 **/
			$error = 'contenu trop long (4 à 2047 caractères)';
		
		if (empty($error))
		{

			$insert = "INSERT INTO comments (titre, contenu, id_author, id_article) VALUES ('".$title."', '".$content."', '".$idUser."', '".$idArticle."')";
			$res = mysqli_query($link, $insert);

			header('Location: index.php?page=article&artId='.$idArticle);
			exit;

		}
		
	}
?>