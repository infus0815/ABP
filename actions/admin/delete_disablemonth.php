<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');


if($_SESSION['username'] == "admin") {
    deletedisableMonth($_GET['disablemonth_id']);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

header('Location: pages/presentation/presentation.php');
exit;
?>