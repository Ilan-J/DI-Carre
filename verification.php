<?php

if(isset($_POST['username']) and isset($_POST['password'])){
    session_start();
    require_once('bdd.php');

    // $password = hash("sha256", $_POST['password']);
    $password = $_POST['password'];

    $user = isRegistered($_POST['username'], $password);
    if($user){
        $_SESSION['user'] = [
            'key' => $user['utilisateur_id'],
            'pseudo' => $user['utilisateur_pseudo']
        ];

    } else {
        header('location:connexion.html');
        exit;
    }
}
header('location:index.php');
exit;