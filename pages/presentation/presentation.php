<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipas.php');


$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

$smarty->assign('equipaEscaloes', $equipaEscaloes);
$smarty->display('presentation/presentation.tpl');

?>