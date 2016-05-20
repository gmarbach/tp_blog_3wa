<?php
if (isset($_GET['artId'])){

	$artId=$_GET['artId'];
	$query="SELECT * FROM articles WHERE id=".$artId;
	// var_dump($query);
	$res= mysqli_query($link,$query) or die("erreur connection");
	$ligne=mysqli_fetch_assoc($res);
		

	$artTitle = $ligne['titre'];
	$artContent = $ligne['contenu'];
	$artAuthor = $ligne['autheur'];
	$artCreaDate = $ligne['date_creation'];
	// $artId = $ligne['id'];
	require('views/article.phtml');
	// var_dump($artId);

}	
else{
	$error = "erreur interne";
}
// var_dump($artId);
?>

