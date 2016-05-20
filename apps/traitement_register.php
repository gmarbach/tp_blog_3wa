<?php
	$error='';
	if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'],$_POST['login'],
	 $_POST['pwd'], $_POST['pwd2']))
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$login = $_POST['login'];
	
		$pwd = sha1($_POST['pwd']);
		
		$pwd2 = sha1($_POST['pwd2']);

	
		if (strlen($nom) < 3)
			$error = 'Nom trop court (3 à 32 caractères)';
		else if (strlen($prenom) > 32)/** Pascal : Petite coquille, ici vous devriez vérifier la variable $nom et pas $prenom, le copier coller, attention :p **/
			$error = 'Prénom trop long (3 à 32 caractères)';/** Pascal : Dans votre base de données le champs fait 50 caractères maxi **/
		if (strlen($prenom) < 3)
			$error = 'Nom trop court (3 à 32 caractères)';
		else if (strlen($prenom) > 32)
			$error = 'Nom trop long (3 à 32 caractères)';/** Pascal : Pareil, la taille dans votre db est de 50 **/
		if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) == false)
			$error = 'Email non valide';
		if (strlen($login) < 3)
			$error = "Nom d'utilisateur trop court (3 à 32 caractères)";
		else if (strlen($login) > 32)
			$error = "Nom d'utilisateur trop long (3 à 32 caractères)";/** Pascal : Pareil pour la taille **/
		if (strlen($pwd) < 4)
			$error = 'Mot de passe trop court (4 à 32 caractères)';
		else if (strlen($pwd) > 255)
			$error = 'Mot de passe trop long (4 à 32 caractères)';/** Pascal : 50 caractères pour le mot de passe est beaucoup trop court, attention **/
		if ($pwd != $pwd2)
			$error = 'Revérifiez le mot de passe';
		if (empty($error))
		{


      $insert =  "INSERT INTO register 
                 (nom,prenom,login,pwd,mail)
                 VALUES ('".$nom."','".$prenom."',
     	         '".$login."','".$pwd."','".$mail."')";
    
    $res = mysqli_query($link,$insert);/** Pascal : La variable $res ne sert a rien actuellement **/

  
       



header('Location:index.php?page=login');
exit;


		}
	}
?>