<?php
	$time=$_GET['time'];
	if (($tasklist = file_get_contents('tasks.json')) !== false)
	{
		$tasks = json_decode($tasklist, true);
		$i = 0;
		while ($i < count($tasks))
		{
			if ($time == $tasks[$i]['timestamp'])
				$task = $tasks[$i];
			$i++;
		}
		$taskTitle = $task['title'];
		$taskDescr = $task['description'];
		$taskPrio = $task['priority'];
		$taskDateCreate = $task['date'];
		$taskTime = date_parse_from_format('j/m/Y', $taskDateCreate);
		$taskDateDue = $task['due date'];
		$comment = $task['comment'];
	}
	else
		$error = 'erreur interne';
	require('views/comment.phtml');
?>