<?php
    require_once('bdd.php');
  if(isset($_POST)) {
    $nom = $_POST['name'];
    $mail = $_POST['email'];
    $msg = $_POST['msg'];
    sendContactForm($nom,$mail,$msg);
    }
?>