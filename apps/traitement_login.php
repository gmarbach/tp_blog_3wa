<?php
	$error='';
	if (isset($_POST['login'], $_POST['pwd']))
	{


$bdd = new PDO('mysql:host=localhost;dbname=blog-3wa','root','troiswa');

$req = $bdd -> query('SELECT login,pwd FROM register');

while ($donnees = $req ->fetch())
{
    if ($_POST['login'] == $donnees['login'] AND 
    	$_POST['pwd'] == $donnees['pwd'])
    {
     echo 'azerty' ;

     header('Location:index.php?page=register');

    }
}

		



			
		
		
	}
?>
