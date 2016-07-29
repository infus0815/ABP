<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');

$disponibilidade = getDisponibilidade();

$smarty->assign('disponibilidade', $disponibilidade);

$smarty->display('calendar/calendar.tpl');

?>