<?php
$link = mysqli_connect("localhost", "root", "troiswa", "blog-3wa");	
if (!$link)
{
    require('views/bigerror.phtml');
    exit;
}

?>