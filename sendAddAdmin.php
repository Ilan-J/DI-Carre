<?php
require_once('bdd.php');
if(isset($_POST)) {
    $id = $_POST['button'];
    addAdmin($id);
    header("location:admin.php");
}
?>