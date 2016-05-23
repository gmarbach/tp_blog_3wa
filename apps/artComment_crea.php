<?php
$artId=$_GET['artId'];
$query="SELECT * FROM comments WHERE id=".$artId;
//$joint="SELECT articles.id, comments.id AS commentaire_id FROM articles INNER JOIN comments ON article.id=comments.id ORDER BY article.id;"
$res=mysqli_query($link,$query);

		while ($ligne=mysqli_fetch_assoc($res))
		{
			$comTitle = $ligne['titre'];
			$comContent = $ligne['contenu'];
			$comAuthor = $ligne['auteur'];
			$comCreaDate = $ligne['date_de_creation'];
			$comModifDate= $ligne['date_de_modif'];
			$comId = $ligne['id_article'];
	
			if (isset($_SESSION['login']))
			{
				require('views/artComment_crea.phtml');
			}
			
			else
			{

				require('views/artComment.phtml');
			}
		}
?>