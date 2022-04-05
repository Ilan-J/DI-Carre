<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
}else {
    header('location:forum.php');
}
require_once('bdd.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Forum</title>
</head>

<body>
  <?php
        include ('head.html');
    ?>
    <div id="block-haut-forum">
        <div class="block-top">
            <h1>Forum</h1>
        </div>
        <div class="block-search">
            <form class="rechercher" method="GET" action="rechercher.php">
                <input type="text" placeholder="Rechercher">
                <button class="style-button" type="submit">Q</button>
            </form>
        </div>
        <div class="block-top">
            <FORM id="list-deroul">
                <SELECT name="nom" size="1">
                    <OPTION selected>Jeu
                    <OPTION> Demineur
                    <OPTION> Morpion
                </SELECT>
            </FORM>
        </div>
        <div class="block-top">
            <div id="block-file">
            <button type="button">Sujet</button>
            </div>
        </div>
    </div>
    <main>
        <?php printOnearticle($_GET['id']);
            $id = $_GET['id'];
            printmsg($_GET['id'])
        ?>
        <form id="formModifier" action="sendmsg.php" method="POST">
                <input onFocus="this.blur()" name ="articleid" value ='<?php echo $id?>'>
                <textarea name="msg" placeholder="Ecrire une réponse"></textarea>
                <div id="validation">
                    <input type="submit" class="btn" value="Poster"id="enregistrement"/>
                </div>
            </form>
    </main>
  <?php
        include('footer.html');
    ?>
</body>

</html>