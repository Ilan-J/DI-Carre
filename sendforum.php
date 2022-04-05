<?php
    require_once('bdd.php');
  if(isset($_POST)) {
    $articleid = 2;
    if($_POST['msg']=='')header("location:forumtopic.php?id=$articleid");
    else{
      $msg = $_POST['msg'];
      $sujet = $_POST['sujet'];
      $jeuxid = $_POST['jeux'];
      sendForumForm($sujet,$msg,$jeuxid);
    } 
  }
?>