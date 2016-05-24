<?php

if(isset($_SESSION['login'])){
	if($_SESSION['login']){
		if($_SESSION['profil'] == 'admin'){
			require('views/btn_profil_admin.phtml');
		}

		if($id_author == $_SESSION['id'] or $_SESSION['profil'] == 'admin'){
			require('views/btn_profil_user.phtml');
		}
	}
}
?>