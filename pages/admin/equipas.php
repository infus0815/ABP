<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');

if($_SESSION['username'] == "admin") {

    $equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

    $escaloes;
    foreach ($equipaEscaloes as $key => $value) {
        $escaloes[$value['escalao_id']] = $value['nome'];
    }

    $equipas = listEquipas();

    
    


    $smarty->assign('equipaEscaloes', $equipaEscaloes);
    $smarty->assign('equipas', $equipas);
    $smarty->assign('escaloes', $escaloes);
    $smarty->display('admin/equipas.tpl');
}
else
    header('Location: ../presentation/presentation.php');

?>