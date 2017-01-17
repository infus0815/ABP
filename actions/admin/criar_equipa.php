<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/equipas.php');


if($_SESSION['username'] == "admin") {

    if($_POST['username'] && $_POST['password1'] && $_POST['password2']&& $_POST['nome']) {

        if(preg_match('/^[a-zA-Z0-9]*$/', $_POST['password1'])) {

            if(strlen($_POST['password1']) > 4) {

                if($_POST['password1'] ==  $_POST['password2']) {

                    if(createUser($_POST['username'], $_POST['nome'],$_POST['password1']))
                        $_SESSION['success_messages'][] = "Equipa criada com sucesso.";
                    else
                        $_SESSION['error_messages'][] = "Erro.";

                }
                else
                    $_SESSION['error_messages'][] = "Repetição de password errada.";

            }
            else
                $_SESSION['error_messages'][] = "A password deve conter pelo menos 5 dígitos.";
        }
        else
            $_SESSION['error_messages'][] = "Password apenas pode conter números e letras.";
    }
    else
        $_SESSION['error_messages'][] = "Campos não preenchidos.";

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

header('Location: pages/presentation/presentation.php');
exit;
?>
