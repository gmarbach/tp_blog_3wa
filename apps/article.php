<?php
	$time=$_GET['time'];
	if (($artList = new PDO ('mysql: host=localhost; dbname=articles; charset=utf8', "root", "troiswa"))!== false)
	{
		$compteur = 0;
		while ($compteur < count($artList))
		{
			if ($time == $artList[$compteur]['timestamp'])
				$article = $artList[$compteur];
			$compteur++;
		}
		$artTitle = $artList['titre'];
		$artContent = $artList['contenu'];
		$artAuthor = $artList['autheur'];
		$artCreaDate = $artList['date'];
		$artId = $artList['id'];
	}
	else
		$error = 'erreur interne';
	require('views/comment.phtml');
?>