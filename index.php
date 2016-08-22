<?php

  if($_SESSION['username']) {
  	var_dump($_SESSION);
    header('Location: pages/calendar/calendar.php');
  }
  else {
    header('Location: pages/presentation/presentation.php');
  }

?>
