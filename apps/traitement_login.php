<?php
	$error='';
	if (isset($_POST['login'], $_POST['pwd']))
	{


    $comparer = "SELECT login,password FROM register";

    $res = mysqli_query($link,$comparer);

    while($lignes = mysqli_fetch_assoc($res))
    {


    	if($lignes['login'] = $_POST['login'] && 
    		$lignes['password'] = $_POST['password'] )

    	{

    		header('Location:index.php?page=home');
    	}
    }







  
}
?>
