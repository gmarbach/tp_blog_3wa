<?php
	$error = '';
	$time=$_GET['time'];
	if (isset($_POST['suppr']))
	{
		if (($tasklist = file_get_contents('tasks.json')) !== false)
		{
			$tasks = json_decode($tasklist, true);
			$i = 0;
			while ($i < count($tasks))
			{
				if ($time == $tasks[$i]['timestamp'])
					$erase = $i;
				$i++;
			}
			array_splice($tasks, $erase, 1);
			$tasklist = json_encode($tasks, JSON_UNESCAPED_UNICODE);
			file_put_contents('tasks.json', $tasklist);
			header('Location: index.php?page=home');
			exit;
		}
		$error = 'Erreur interne';
	}
?>