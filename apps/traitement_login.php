<?php
	$error='';
	if (isset($_POST['login'], $_POST['pwd']))
	{

        /** Pascal : Vous devriez aussi récupérer l'id de l'utilisateur, ça vous sera utile sous peu ! **/
        $comparer = "SELECT id, login, pwd, profil FROM register";/** Pascal : Dans votre base de données vous n'avez pas respecté la taille des champs : 2^n-1 **/
        $res = mysqli_query($link,$comparer);

        while($lignes = mysqli_fetch_assoc($res))
        {
        	if($lignes['login'] == $_POST['login'] && $lignes['pwd'] == $_POST['pwd'] )
        	{
                $_SESSION['login'] = $lignes['login'];

                $_SESSION['profil'] = $lignes['profil'];

                $_SESSION['id'] = $lignes['id'];

        		header('Location:index.php?page=home');
                exit;
        	}
        }
        $error = "Login/password inconu !!!";
    }

?>
