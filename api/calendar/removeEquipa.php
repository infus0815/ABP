<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/equipa_confirmacao.php');

    if($_SESSION['username']) {
    	removeDisponibilidade($_POST['equipaEscalao_id'],$_POST['data'],$_POST['horario']);
    	$disponibilidade = getDisponibilidade($_POST['escalao_id']);


    	echo json_encode($disponibilidade);
    }

?>