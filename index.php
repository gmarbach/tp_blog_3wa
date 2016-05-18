<?php

session_start();
$error = '';

$page = 'home';

$access = array('home', 'register', 'login');

if (isset($_SESSION['login']))
	$access = array('home', 'register', 'login', 'adminCrea', 'adminModif', 'adminSuppr', 'editUser');
if (isset($_GET['page']))// http://fr2.php.net/manual/fr/function.isset.php
{
	if (in_array($_GET['page'], $access))
		$page = $_GET['page'];
}
$access_traitement = array('login', 'logout', 'register', 'comUsers', 'create_admin');
if (in_array($page, $access_traitement))
	require('apps/traitement_'.$page.'.php');// apps/traitement_login.php ou apps/traitement_register.php ou apps/traitement_contact.php
require('apps/skel.php');

/****** EXERCICE PAR GROUPE DE 4 ******/

?>