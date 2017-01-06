<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');

if($_SESSION['username']) {

	$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

	$escaloes;
	foreach ($equipaEscaloes as $key => $value) {
		$escaloes[$value['escalao_id']] = $value['nome'];
	}
	

	$smarty->assign('equipaEscaloes', $equipaEscaloes);
	$smarty->assign('escaloes', $escaloes);
	$smarty->display('conta/alteracao_password.tpl');
}
else
	header('Location: ../presentation/presentation.php');

?>