<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipas.php');


if($_SESSION['username']) {

    if($_POST['escalao']) {
        $equipa_id = getEquipaId($_SESSION['username'])[0]['equipa_id'];
        if(!$_POST['nome']){
            if(createEquipaEscalaowithoutNome($equipa_id, $_POST['escalao']))
                $_SESSION['success_messages'][] = "Equipa criada com sucesso.";
            else
                $_SESSION['error_messages'][] = "Equipa duplicada";
        }
        else {
            if(createEquipaEscalaowithNome($equipa_id, $_POST['escalao'],$_POST['nome']))
                $_SESSION['success_messages'][] = "Equipa criada com sucesso.";
            else
                $_SESSION['error_messages'][] = "Equipa duplicada";
        }

    }
    else
        $_SESSION['error_messages'][] = "Input Invalido: escalao = ".$_POST['escalao']." nome = ".$_POST['nome'] ;

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

header('Location: pages/presentation/presentation.php');
exit;
?>