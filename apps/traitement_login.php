<?php
	$error='';
	if (isset($_POST['login'], $_POST['pwd']))
	{

        $comparer = "SELECT login, pwd, profil FROM register";
        $res = mysqli_query($link,$comparer);

        while($lignes = mysqli_fetch_assoc($res))
        {
        	if($lignes['login'] == $_POST['login'] && $lignes['pwd'] == $_POST['pwd'] )
        	{
                $_SESSION['login'] = $lignes['login'];

                $_SESSION['profil'] = $lignes['profil'];

                var_dump($lignes['profil']);

        		header('Location:index.php?page=home');
                exit;
        	}
        }
        $error = "Login/password inconu !!!";
    }

?>
