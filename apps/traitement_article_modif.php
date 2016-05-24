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

	if(isset($_GET['action']))
	{
	    if($_GET['action'] == "modifier")
	    
		{    
		    $artId = $_GET['id'];
		    
		    $copy = "SELECT (titre, contenu, autheur, date_creation, hide_article, id_author) FROM articles WHERE id='".$artId."'";
		    $res = mysqli_query($link, $copy);

			$ligne=mysqli_fetch_assoc($res);
			$artTitle = $ligne['titre'];
			$artContent = $ligne['contenu'];
			$artAuthor = $ligne['autheur'];
			$artCreaDate = $ligne['date_creation'];
			$id_author = $ligne['id_author'];


		    $insert = "INSERT INTO articles (titre, contenu, autheur, date_creation, hide_article, id_author) VALUES ('".$artTitle."', '".$artContent."', '".$artAuthor."', '".$artCreaDate."', "archive", '".$id_author."')";
			$res = mysqli_query($link, $insert);

			require('views/article_modif.phtml');

			$modif = "UPDATE articles SET titre = '$_POST['title']', contenu = '$_POST['content']' WHERE id='".$artId."'";

		    
		    echo "vous voulez modifier";
		    var_dump($artId);
		    var_dump($copy);
		    var_dump($res);
		    header('Location:index.php?page=register'); 
		}   
	}

//	header('Location: index.php?page=login');
?>