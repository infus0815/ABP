<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  var_dump($_SESSION['form_values']);

  
  $smarty->display('users/register.tpl');
?>
