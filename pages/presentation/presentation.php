<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipas.php');


$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

$escaloes;
	foreach ($equipaEscaloes as $key => $value) {
		$escaloes[$value['escalao_id']] = $value['nome'];
	}

$smarty->assign('escaloes', $escaloes);
$smarty->assign('equipaEscaloes', $equipaEscaloes);
$smarty->display('presentation/presentation.tpl');


?>