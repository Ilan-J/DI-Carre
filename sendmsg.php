<?php
    require_once('bdd.php');
  if(isset($_POST)) {
    if($_POST['msg']=='')header("location:forumtopic.php?id=$articleid");
    else{
      $msg = $_POST['msg'];
      $articleid = $_POST['articleid'];
      sendMsgForm($msg,$articleid);
    } 
  }
?>