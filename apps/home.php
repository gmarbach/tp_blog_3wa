<?php
	$error = '';

	$query = "SELECT * FROM articles";
	$res = mysqli_query($link, $query);
	$count = 0;
	while($ligne = mysqli_fetch_assoc($res)){
		$artTitle = $ligne['titre'];
		$artContent = $ligne['contenu'];
		$mots = explode(" ", $artContent);
		$nbMots = count($mots);

		if($nbMots > 15){
			$nbmots = 15;
		}
		$countMots = 0;
		$artContent = "";
		while($countMots < $nbMots){
			$artContent .= $mots[$countMots]." ";
			$countMots++;
		}

		$artCreaDate = $ligne['date_creation'];
		$artAuthor = $ligne['autheur'];
		$artId = $ligne['id'];

		require('views/home.phtml');
		$count++;
	}


?>