<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');

if($_SESSION['username']) {

	$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

	$smarty->assign('equipaEscaloes', $equipaEscaloes);

	$smarty->display('perfil/perfil.tpl');
}
else
	header('Location: ../presentation/presentation.php');

?>