<?php
if (isset($_SESSION['login']))
{
	require('views/header_log.phtml');
}
else
{
	require('views/header.phtml');
}

?>