<?php
if (isset($_SESSION['login']))
{

	if ($_SESSION['profil'] == 'admin')
	{
		require('views/header_admin.phtml');
	}
	 	
	else
		require('views/header_log.phtml');
}
else
{
	require('views/header.phtml');
}

?>