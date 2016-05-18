<?php
	$hide = 'hide';
	if (empty($comment))
	{
		$noComment = 'Pas de commentaire';
		$hide = '';
	}
	$i = 0;
	while ($i < count($comment))
	{
		$author = $comment[$i]['author'];
		$text = $comment[$i]['comment'];
		$dateComment = $comment[$i]['date'];
		require('views/comments.phtml');
		$i++;
	}
?>