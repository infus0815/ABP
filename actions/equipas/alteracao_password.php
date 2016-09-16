<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/equipas.php');


  if($_SESSION['username']) {

    if($_POST['old_password'] && $_POST['new_password1'] && $_POST['new_password2']) {

      if(isLoginCorrect($_SESSION['username'], $_POST['old_password'])) {

        if($_POST['new_password1'] ==  $_POST['new_password2']) {

          if($_POST['old_password'] != $_POST['new_password1']) {

              if(changePassword($_SESSION['username'], $_POST['new_password1']))
                $_SESSION['success_messages'][] = "Alteração de password efectuada.";
              else
                $_SESSION['error_messages'][] = "Erro.";
          }
          else
            $_SESSION['error_messages'][] = "Nova password igual à antiga.";
        }
        else
          $_SESSION['error_messages'][] = "Repetição de password errada.";
      }
      else
        $_SESSION['error_messages'][] = "Antiga password errada.";           
    }
    else
      $_SESSION['error_messages'][] = "Campos não preenchidos.";

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  header('Location: pages/presentation/presentation.php');
  exit;
?>
