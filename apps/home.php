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
		$id_author = $ligne['id_author'];
		$artCreaDate = $ligne['date_creation'];
		$artAuthor = $ligne['autheur'];
		$artId = $ligne['id'];

		if($nbMots > 15){
			$nbmots = 15;
		}
		$countMots = 0;
		$artContent = "";
		while($countMots < $nbMots){
			$artContent .= $mots[$countMots]." ";
			$countMots++;
		}

		// $id_author = $ligne['id_author'];
		
		if (isset($_SESSION['login']) )
		{
		        
			if ($_SESSION['profil'] == 'admin')
			{
				require('views/home_admin.phtml');
			}
			 	
			else
				require('views/home_user.phtml');
		}
		else
		{
			require('views/home.phtml');
		}
		$count++;
	}


?>