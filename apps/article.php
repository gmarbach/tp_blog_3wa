<?php
	if ($query= "SELECT * FROM articles WHERE id=1"!== false)
	{
		$res= mysqli_query($link,$query);
		while ($ligne=mysqli_fetch_assoc($res))
		{
		
		$artTitle = $ligne['titre'];
		$artContent = $ligne['contenu'];
		$artAuthor = $ligne['autheur'];
		$artCreaDate = $ligne['date'];
		$artId = $ligne['id'];
		}
	}
	else
		$error = 'erreur interne';
	require('views/home.phtml');
?>