<?php
if (isset($_SESSION['login']))
{
	var_dump($_SESSION['profil']);
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