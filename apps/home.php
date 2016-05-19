<?php
	$error = '';
	// $noTask = '';



	// 	$sortTypeTest = 'createDate';
	// 	$sortOrder = 'asc';

	// if (isset($_GET['sortType'], $_GET['orderType'])){
	// 	$sortTypeTest = $_GET['sortType'];
	// 	$sortOrder = $_GET['orderType'];
	// }

	$count = 0;
	while($count <10){
		$artTitle = 'Ici le titre';
		$artContent = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta animi neque consectetur explicabo. Nihil quas facere, tempore recusandae repellendus, ipsa, accusamus exercitationem fugiat quisquam nostrum error magni non sint quasi.';
		$mots = explode(" ", $artContent);
		$countMots = 0;
		$artContent = "";
		while($countMots < 15){
			$artContent .= $mots[$countMots]." ";
			$countMots++;
		}

		$artCreaDate = '18/05/2016';
		$artAuthor = 'Edouard Dabert';
		$artId = '1';

		require('views/home.phtml');
		$count++;
	}


?>