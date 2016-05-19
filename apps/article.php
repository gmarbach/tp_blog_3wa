<?php
if (isset($_GET['artId'])
{
	$artId=$_GET['artId'];
	$query='"SELECT * FROM articles WHERE id='.$artId.'"';
	$res= mysqli_query($link,$query);
	$ligne=mysqli_fetch_assoc($res);
		

			$artTitle = $ligne['titre'];
			$artContent = $ligne['contenu'];
			$artAuthor = $ligne['autheur'];
			$artCreaDate = $ligne['date_creation'];
			// $artId = $ligne['id'];
			require('views/article.phtml');
			
}	
?>