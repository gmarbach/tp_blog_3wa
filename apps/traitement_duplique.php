<?php
/** Pascal : Faites le ménage rapidement pour pas avoir des fichiers en trop que vous garderez pour rien ;) **/
	$error = '';
	$time=$_GET['time'];
	if (($tasklist = file_get_contents('tasks.json')) !== false)
	{
		$tasks = json_decode($tasklist, true);
		$i = 0;
		while ($i < count($tasks))
		{
			if ($time == $tasks[$i]['timestamp'])
				$copy = $tasks[$i];
			$i++;
		}
		$dateCreation = date('j/m/Y');
		$time = time();
		$copy['date'] = $dateCreation;
		$copy['timestamp'] = $time;
		array_push($tasks, $copy);
		$tasklist = json_encode($tasks, JSON_UNESCAPED_UNICODE);
		file_put_contents('tasks.json', $tasklist);
		header('Location: index.php?page=home');
		exit;
	}
	$error = 'Erreur interne';
?>