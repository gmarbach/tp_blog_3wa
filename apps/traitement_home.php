<?php
	$sortType = 'date';
	$sortOrder = 'asc';
	$sortPrio = false;
	$sort1="date de création";
	$sort2="croissant";

	if (isset($_GET['sortType'], $_GET['orderType']))
	{
		$sortTypeTest = $_GET['sortType'];
		$sortOrder = $_GET['orderType'];
		if ($sortTypeTest == 'createDate')
		{
			$sortType = 'timestamp';
			$sort1="date de création";
		}
	
		else if ($sortTypeTest == 'dueDate')
		{
			$sortType = 'due date';
			$sort1="date de réalisation";
		}
			
		else if ($sortTypeTest == 'priority')
		{
			$sortPrio = true;
			$sort1="priorité";
		}

		if ($sortOrder == 'asc')
			{
				$sort2="croissant";
			}
				
			else if ($sortOrder == 'desc')
			{
				$sort2="décroissant";
			}
			

		
	}

?>