<?php

  /**
   * ログインで必要なページにsession
   */
  session_start();
  if (!isset($_SESSION['id'])){
    header('Location: login.php');
  }
?>
