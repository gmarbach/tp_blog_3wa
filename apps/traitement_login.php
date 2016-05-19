<?php
	$error='';
	if (isset($_POST['login'], $_POST['pwd']))
	{


    $comparer = "SELECT login,pwd FROM register";

    $res = mysqli_query($link,$comparer);

    while($lignes = mysqli_fetch_assoc($res))
    {


    	if($lignes['login'] = $_POST['login'] && 
    		$lignes['pwd'] = $_POST['pwd'] )

    	{

    		header('Location:index.php?page=home');
    	}
    }







  
}
?>
