<?php


if(isset($_POST['title'],$_POST['content']))


{



HEADER('Location:index.php?page=home');
}

require('views/artCommentCrea.phtml');

?>