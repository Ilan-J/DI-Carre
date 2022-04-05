<?php
require_once('bdd.php');
if(isset($_POST)) {
    $id = $_POST['button'];
    deleteforum($id);
}
?>