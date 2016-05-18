<?php
	$error='';
	$hide='hide';
	if (isset($_POST['title'], $_POST['descript'], $_POST['priority'],$_POST['dateFin']))
	{
		$title = $_POST['title'];
		$descript = $_POST['descript'];
		$priority = $_POST['priority'];
		$dateFin = $_POST['dateFin'];
		$decompDate = date_parse_from_format('j/m/Y', $dateFin);
		$dateCreation = date('j/m/Y');
		$time = time();

		
		if (strlen($title) < 3)
			$error = 'Titre trop court (4 à 20 caractères)';
		else if (strlen($title) > 21)
			$error = 'Titre trop long (4 à 20 caractères)';
		if (strlen($descript) < 3)
			$error = 'Description trop courte (4 à 40 caractères)';
		else if (strlen($descript) > 41)
			$error = 'Description trop longue (4 à 40 caractères)';
		if ($priority == "0")
			$error = 'Selectionnez une priorité';
		if (checkdate($decompDate["month"], $decompDate["day"], $decompDate["year"]) !== TRUE)
			$error = 'Date non valide';
		if(mktime(0, 0, 0, $decompDate["month"], $decompDate["day"], $decompDate["year"]) < $time)
			$error = 'La date doit être dans le futur';
		if (empty($error))
		{
			$task = array('title' => $title, 'description' => $descript,'priority' => $priority, 'due date' => $dateFin, 'date' => $dateCreation, 'timestamp' => $time, 'comment' => array());
			$tasklist = file_get_contents('tasks.json');
			$tasks = json_decode($tasklist, true);
			if (empty($tasks))
				$tasks = array();
			array_push($tasks, $task);
			$data = json_encode($tasks, JSON_UNESCAPED_UNICODE);
			if (file_put_contents('tasks.json', $data) !== false)
			{
				header('Location: index.php?page=home');
				exit;
			}
			$error ='Erreur interne';
		}
		$hide = '';
	}
?>