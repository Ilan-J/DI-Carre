<?php
require_once('bdd.php');
if(isset($_POST)) {
    $id = $_POST['button'];
    deletecontact($id);
    header("location:admin.php");
}
?>