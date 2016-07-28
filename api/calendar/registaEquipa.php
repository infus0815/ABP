<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/equipa_confirmacao.php');


    registaEquipa($_POST['username'],$_POST['data']);
    $confirmacoes = getConfirmacoes();


    echo json_encode($confirmacoes);

?>