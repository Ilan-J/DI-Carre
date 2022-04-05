<?php
session_start();
require_once('bdd.php');


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Forum</title>
</head>

<body>
  <?php
        include('head.php');
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
            <button type="button" onclick="window.location.href = 'forumcreate.php'">Créer un sujet</button>
            </div>
        </div>
    </div>
    <main>
    <form id="form-modifier" action="sendforum.php?id=<?php $id?>" method="POST">
        <select name="jeux" class="select">
             <option value='1' selected>Loterie</option>
        </select>
        <input type="text" name="sujet" value="" placeholder="Sujet" required class="txtBox" />
        <textarea name="msg" placeholder="Ecrire une réponse"></textarea>
        <div id="validation">
            <input type="submit" class="btn" value="Poster"id="enregistrement"/>
        </div>
    </form>
    </main>
  <div id="separation-footer-main">
  </div>
  <?php
        include('footer.html');
    ?>
</body>

</html>