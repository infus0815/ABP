<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/admin.php');
    include_once($BASE_DIR .'database/equipas.php');



    if($_SESSION['username'] == 'admin') {

		if($_POST['username']) {
			$novapassword = randomPassword();
			changePassword($_POST['username'],$novapassword);
			echo json_encode($novapassword);
		}
    }
?>