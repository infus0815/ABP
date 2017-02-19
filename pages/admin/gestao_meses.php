<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipa_confirmacao.php');
include_once($BASE_DIR .'database/equipas.php');
include_once($BASE_DIR .'database/admin.php');

if($_SESSION['username'] == "admin") {

    $equipaEscaloes = getEquipaEscaloes($_SESSION['username']);

    $escaloes;
    foreach ($equipaEscaloes as $key => $value) {
        $escaloes[$value['escalao_id']] = $value['nome'];
    }

    $disabledMonths = listdisableMonth();


    $listaMeses = [ "Janeiro","Fevereiro","Março","Abril","Maio","Junho",
    "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro" ];



    $smarty->assign('equipaEscaloes', $equipaEscaloes);
    $smarty->assign('listaMeses', $listaMeses);
    $smarty->assign('disabledMonths', $disabledMonths);
    $smarty->assign('escaloes', $escaloes);
    $smarty->display('admin/gestao_meses.tpl');
}
else
    header('Location: ../presentation/presentation.php');

?>