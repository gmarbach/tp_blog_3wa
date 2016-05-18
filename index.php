<?php
// var_dump($_GET);
// index.php?page=home
// index.php?page=login
// index.php?page=register

session_start();
$error = '';
$page = 'home';
$access = array('home', 'register', 'login');
if (isset($_SESSION['login']))
	$access = array('home', 'register', 'login', 'create', 'edit', 'suppr', 'logout', 'duplique', 'comment');
if (isset($_GET['page']))// http://fr2.php.net/manual/fr/function.isset.php
{
	if (in_array($_GET['page'], $access))
		$page = $_GET['page'];
}
$access_traitement = array('home', 'register', 'login', 'create', 'edit', 'suppr', 'logout', 'duplique', 'comment');
if (in_array($page, $access_traitement))
	require('apps/traitement_'.$page.'.php');// apps/traitement_login.php ou apps/traitement_register.php ou apps/traitement_contact.php
require('apps/skel.php');

/****** EXERCICE PAR GROUPE DE 2 ******/
/*
/!\ INTERDICTION DE SE METTRE EN GROUPE AVEC UN VOISIN /!\

Stockage : JSON
json_encode
json_decode

Tout en respectant le principe du MVC 2 strict, réaliser un outil capable de gérer des tâches.
Une tâche se définie de cette façon :
un titre
une description
une priorité (l'importance de la tâche)
une date de création (la date a laquelle la tâche a été créée)
une date de réalisation (la date AVANT laquelle la tâche doit être réalisée)
Vous DEVEZ produire un schéma de l'architecture MVC
Un formulaire d'inscription et de connexion sont obligatoires
Pour créer une tâche vous devez être connecté

Vous devez pouvoir manipuler les tâches de la façon suivante et par ordre de priorité :
Créer une tâche
Lister les tâches
Supprimer une tâche
Ordonner les tâches par date de création OU date de réalisation OU priorité
Modifier une tâche
Dupliquer une tâche

Les tâches sont visibles par tout le monde (connecté ou non) mais on ne peut intéragir avec que si on est connecté.

Bonus :
Pouvoir commenter une tâche
Design/UX
*/

?>