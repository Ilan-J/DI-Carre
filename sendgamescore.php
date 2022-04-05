<?php
require_once('bdd.php');
if(isset($_POST)) {
    $id = $_POST['button'];
    if($id === "doubler"){
        if (randompiece(50)){
            doublescore();
        }else {
            resetscore();
        }
    }
    if($id === "+5"){
        if (randompiece(20)){
            plus5score();
        }else {
            resetscore();
        }
    }
    if($id === "x3"){
        if (randompiece(66)){
            triplescore();
        }else {
            resetscore();
        }
    }
    if($id === "x100"){
        if (randompiece(95)){
            x100score();
        }else {
            resetscore();
        }
    }
    header("location:jeux.php");
}
?>