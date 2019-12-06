<<?php
  session_start();
  $_SESSION['pseudo'] = NULL;
  header('Location: index.php');
?>
