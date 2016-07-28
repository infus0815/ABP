<?php

  if($_SESSION['username']) {
    header('Location: pages/calendar/calendar.php');
  }
  else {
    header('Location: pages/equipas/login.php');
  }

?>
