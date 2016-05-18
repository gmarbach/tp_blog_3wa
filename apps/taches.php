<?php
	$modify = 'hide';
	if (isset($_SESSION['login']))
		$modify = '';
	if (($tasklist = file_get_contents('tasks.json')) !==false)
	{
		$tasks = json_decode($tasklist, true);
		if (count($tasks) == 0 || empty($tasklist))
			$noTask = 'Aucune tâche à afficher';
		else{
			$i = 0;
			$sort = array();
				while ($i < count($tasks))
				{
					if ($sortPrio == false)
						$sort[$i] = $tasks[$i][$sortType];
					else if ($tasks[$i]['priority'] == 'haute')
						$sort[$i] = 'c';
					else if ($tasks[$i]['priority'] == 'moyenne')
						$sort[$i] = 'b';
					else if ($tasks[$i]['priority'] == 'basse')
						$sort[$i] = 'a';
					$i++;
				}
			if ($sortOrder == 'asc')
			{
				array_multisort($sort, SORT_ASC, $tasks);
			}
				
			else if ($sortOrder == 'desc')
			{
				array_multisort($sort, SORT_DESC, $tasks);
			}
				
			$i = 0;
			while ($i < count($tasks))
			{
				$taskTitle = $tasks[$i]['title'];
				$taskDescr = $tasks[$i]['description'];
				$taskPrio = $tasks[$i]['priority'];
				$taskDateCreate = $tasks[$i]['date'];
				$taskTime = date_parse_from_format('j/m/Y', $taskDateCreate);
				$taskDateDue = $tasks[$i]['due date'];
				$timestamp = $tasks[$i]['timestamp'];
				require('views/tache.phtml');
				$i++;
			}
		}
	}
	else
		$error = 'Erreur interne';
?>