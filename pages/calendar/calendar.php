<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');

$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);
$disponibilidade;

if($_GET['escalao_id']) {
	$disponibilidade = getDisponibilidade($_GET['escalao_id']);
	$smarty->assign('escalaoSelecionado', $_GET['escalao_id']);
}
else{
	
	$disponibilidade = getDisponibilidade($equipaEscaloes[0][escalao_id]);
	$smarty->assign('escalaoSelecionado', $equipaEscaloes[0][escalao_id]);
}





$smarty->assign('disponibilidade', $disponibilidade);
$smarty->assign('equipaEscaloes', $equipaEscaloes);





$smarty->display('calendar/calendar.tpl');

?>