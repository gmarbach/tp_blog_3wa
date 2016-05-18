<?php
	$error = '';
	$noTask = '';
	$selectSortType = [
						'createDate' => ['selected','',''],
						'dueDate' 	 => ['','selected',''],
						'priority' 	 => ['','','selected']
	];

	$selectOrderType = [
						'asc' => ['selected',''],
						'desc' 	 => ['','selected']
	];


		$sortTypeTest = 'createDate';
		$sortOrder = 'asc';

	if (isset($_GET['sortType'], $_GET['orderType'])){
		$sortTypeTest = $_GET['sortType'];
		$sortOrder = $_GET['orderType'];
	}

	require('views/home.phtml');
?>