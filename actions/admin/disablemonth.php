<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');


if($_SESSION['username'] == "admin") {
    disableMonth($_GET['month'],$_GET['year']);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

header('Location: pages/presentation/presentation.php');
exit;
?>