<?php
  session_start();

  unset($_SESSION['login']);
  unset($_SESSION['firstName']);
  unset($_SESSION['lastName']);

  header("location: index.php?logout=true");
?>