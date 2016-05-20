<?php

if(isset($_SESSION['login'])){
	if($_SESSION['login']){
		if($_SESSION['profil'] == 'admin'){
			require('views/btn_profil_admin.phtml');
		}


		require('views/btn_profil_user.phtml');
	}
}
?>