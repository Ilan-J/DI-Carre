<?php
session_start();

if(isset($_POST['username']) and isset($_POST['mail']) and isset($_POST['password']) and isset($_POST['repassword'])){

    if($_POST['password'] == $_POST['repassword']){
        require_once('bdd.php');

        // $password = hash("sha256", $_POST['password']);
        $password = $_POST['password'];

        $user = register($_POST['username'], $_POST['mail'], $password);


        if($user){
            session_start();

            $_SESSION['user'] = [
                'key' => $user['utilisateur_id'],
                'pseudo' => $user['utilisateur_pseudo']
            ];

            createGameLotterie();
            header('location:profil.php');
            exit;
        } else {
            
            header('location:creation_compte.html?ps');
            exit;
        }
    } else {
        header('location:creation_compte.html?pwd');
        exit;
    }
}
header('location:profil.php');
exit;