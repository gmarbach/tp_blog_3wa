<?php
	$error = '';
	if (isset($_POST['comment']))
	{
		$time = $_GET['time'];
		$comment = $_POST['comment'];
		if (strlen($comment) < 3)
			$error = 'Commentaire trop court (4 à 40 caractères)';
		else if (strlen($comment) > 41)
			$error = 'Commentaire trop long (4 à 40 caractères)';
		if (empty($error))
		{
			$comment = array('author' => $_SESSION['login'], 'comment' => $comment, 'date' => date('d/m/Y H:i'), 'timestamp' => time());
			$tasklist = file_get_contents('tasks.json');
			$tasks = json_decode($tasklist, true);
			$i = 0;
			while ($i < count($tasks))
			{
				if ($time == $tasks[$i]['timestamp'])
				{
					array_push($tasks[$i]['comment'], $comment);
				}
				$i++;
			}
			$data = json_encode($tasks, JSON_UNESCAPED_UNICODE);
			if (file_put_contents('tasks.json', $data) !== false)
			{
				header('Location: index.php?page=comment&time='.$time);
				exit;
			}
			$error ='Erreur interne';
		}
	}
?>