<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipas.php');


if($_SESSION['username'] && $_GET['equipaescalao_id']) {

    if(checkUserEquipaEscalao($_SESSION['username'], $_GET['equipaescalao_id']))
        deleteEquipaEscalao($_GET['equipaescalao_id']);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

header('Location: pages/presentation/presentation.php');
exit;
?>