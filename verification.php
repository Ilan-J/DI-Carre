<?php
require_once ('bdd.php');
function isAdmin() {
    $id = $_SESSION['user']['key'];
    $db = connect();
    $sql = "SELECT * FROM admin WHERE `utilisateur_id` = :id";

    $request = $db->prepare($sql);
    $request->bindvalue(':id', $id, PDO::PARAM_INT);
    $request->execute();
    $return = $request->fetch();

    if($return){
        return 1;
    }
    return 0;
}
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
        $_SESSION['admin'] = 0;
        if(isAdmin()===1){
            $_SESSION['admin'] = 1;
        }
        var_dump($_SESSION['admin']);

    } else {
        header('location:connexion.html');
        exit;
    }
}
header('location:index.php');
exit;