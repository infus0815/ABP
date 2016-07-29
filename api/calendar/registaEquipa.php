<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/equipa_confirmacao.php');


    registaEquipa($_POST['username'],$_POST['data'],1,1);//TODO
    $disponibilidade = getDisponibilidade();


    echo json_encode($disponibilidade);

?>