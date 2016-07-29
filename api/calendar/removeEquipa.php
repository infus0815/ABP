<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/equipa_confirmacao.php');


    removeEquipa($_POST['username'],$_POST['data'],1);//TODO
    $disponibilidade = getDisponibilidade();


    echo json_encode($disponibilidade);

?>