<?php
if (isset($_SESSION['login']))
{
	if ($_SESSION['login'] == 'admin')
	{
		require('views/header_admin.phtml');
	}
	 	
	else
		require('views/headegitr_log.phtml');
}
else
{
	require('views/header.phtml');
}

?>