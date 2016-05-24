<?php
	
//	$artId=$_GET['artId'];
//	$query="SELECT * FROM comments WHERE id=".$artId;
	
//	$res=mysqli_query($link,$query);	
/*	
$error='';
	$hide='hide';
	if (isset($_POST['title'], $_POST['content'], $_SESSION['id']))
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$author = $_SESSION['login'];
		$id_author = $_SESSION['id'];

		
		if (strlen($title) < 4)
			$error = 'Titre trop court (4 à 60 caractères)';
		else if (strlen($title) > 63)
			$error = 'Titre trop long (4 à 60 caractères)';
		if (strlen($content) < 3)
			$error = 'contenu trop court (4 à 2047 caractères)';
		else if (strlen($content) > 2047)
			$error = 'contenu trop long (4 à 2047 caractères)';
		
		if (empty($error))
		{


			$insert = "INSERT INTO articles (titre, contenu, autheur, id_author) VALUES ('".$title."', '".$content."', '".$author."', '".$id_author."')";
			$res = mysqli_query($link, $insert);
			

			header('Location: index.php?page=index');

		}
		
	}

*/
	header('Location: index.php?page=index');
?>