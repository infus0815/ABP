<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');

$confirmacoes = getConfirmacoes();

$smarty->assign('confirmacoes', $confirmacoes);

$smarty->display('calendar/calendar.tpl');

?>