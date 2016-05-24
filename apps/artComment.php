<?php
// if(isset($_SESSION['id_article'])){
	$query="SELECT * FROM comments WHERE id_article=".$artId;
	//$joint="SELECT articles.id, comments.id AS commentaire_id FROM articles INNER JOIN comments ON article.id=comments.id ORDER BY article.id;"
	$res=mysqli_query($link,$query);
	while ($ligne=mysqli_fetch_assoc($res))
	{
		$comId = $ligne['id'];
		$comTitle = $ligne['titre'];
		$comContent = $ligne['contenu'];
		$comAuthor = $ligne['auteur'];
		$comCreaDate = $ligne['date_de_creation'];
		$comModifDate= $ligne['date_de_modif'];
		$artId = $ligne['id_article'];
		$id_author = $ligne['id_author'];

		require('views/artComment.phtml');
		
	}

// }
	
// ?>