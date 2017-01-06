<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');


if($_SESSION['username']) {
	$equipaEscaloes = getEquipaEscaloes($_SESSION['username']);
	$disponibilidade;

	foreach($equipaEscaloes as $equipaEscalao)
	{
		if($equipaEscalao['equipaescalao_id'] == $_GET['equipaescalao_id'])
		{
			$escaloes;
			foreach ($equipaEscaloes as $key => $value) {
			$escaloes[$value['escalao_id']] = $value['nome'];
			}
	

			if($_GET['escalao_id'] && $_GET['equipaescalao_id']) {
				$disponibilidade = getDisponibilidade($_GET['escalao_id']);
				$smarty->assign('escalaoSelecionado', $_GET['escalao_id']);
			 	$smarty->assign('equipaescalao', $_GET['equipaescalao_id']);
			}
			else{
			
				$disponibilidade = getDisponibilidade($equipaEscaloes[0][escalao_id]);
				$smarty->assign('escalaoSelecionado', $equipaEscaloes[0][escalao_id]);
				$smarty->assign('equipaescalao', $equipaEscaloes[0][equipaescalao_id]);
			}


			$smarty->assign('disponibilidade', $disponibilidade);
			$smarty->assign('equipaEscaloes', $equipaEscaloes);
			$smarty->assign('escaloes', $escaloes);

			$smarty->display('calendar/calendar.tpl');

			return;
		}
	}
}

header('Location: ../presentation/presentation.php');

?>