<?php
	$error='';


if(isset($_GET['action']))
{

    if($_GET['action'] == "supprimer")
    
{

    $artId = $_GET['id'];
    
    $copy = "SELECT (titre, contenu, autheur, date_creation, hide_article, id_author) FROM articles WHERE id='".$artId."'";
    $res = mysqli_query($link, $copy);
    
    echo "vous voulez supprimer";
    var_dump($artId);
    var_dump($copy);
    var_dump($res);

    $supr = "DELETE * FROM articles";

    mysqli_query($link,$supr);

 




    

//    header('Location:index.php?page=home_admin');

 
}

    
        
    
}


if(isset($_GET['action']))
{

    if($_GET['action'] == "modifier")
    
{

    


    

    header('Location:index.php?page=home_admin');

 
}

    
        
    
}


if(isset($_GET['action']))
{

    if($_GET['action'] == "comenter")
    
{

    



 




    

    header('Location:index.php?page=home_user');

 
}

}







	if (isset($_POST['login'], $_POST['pwd']))
	{

        /** Pascal : Vous devriez aussi récupérer l'id de l'utilisateur, ça vous sera utile sous peu ! **/
       $comparer = "SELECT login, pwd, profil FROM register";/** Pascal : Dans votre base de données vous n'avez pas respecté la taille des champs : 2^n-1 **/
       $res = mysqli_query($link,$comparer);
       $comparer = "SELECT id, login, pwd, profil FROM register";/** Pascal : Dans votre base de données vous n'avez pas respecté la taille des champs : 2^n-1 **/
        $res = mysqli_query($link,$comparer);


        while($lignes = mysqli_fetch_assoc($res))
        {
        	if($lignes['login'] == $_POST['login'] && $lignes['pwd'] == $_POST['pwd'] )
        	{
                $_SESSION['login'] = $lignes['login'];

                $_SESSION['profil'] = $lignes['profil'];

                $_SESSION['id'] = $lignes['id'];
                 
        		header('Location:index.php?page=home_user');
                exit;
        	}
        }
        $error = "Login/password inconu !!!";
    }

?>
