<?php
require_once('bdd.php');
if(isset($_POST)) {
    $id = $_POST['button'];
    if($id === "doubler"){
        if (randompiece(40)){
            doublescore();
        }else {
            resetscore();
        }
    }
    if($id === "+5"){
        if (randompiece(40)){
            plus5score();
        }
    }
    if($id === "x3"){
        if (randompiece(40)){
            triplescore();
        }
    }
    if($id === "x100"){
        if (randompiece(40)){
            x100score();
        }
    }
    header("location:jeux.php");
}
?>