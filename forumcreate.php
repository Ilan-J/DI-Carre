<?php  
require_once('bdd.php');


?>

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
            <h1 class="title-page">Forum</h1>
        </div>
        <div class="block-search">
        <form id="search" action="?id">
            <input type="text" name="recherche" placeholder="Votre recherche" id="size-search"/>
            <input class="style-button" type="image" src="images/iconSearch.svg" height="25px" width="5px"/>
        </form>
        </div>
        <div class="block-top">
            <FORM id="list-deroul">
                <SELECT name="nom" size="1">
                    <OPTION selected>Jeu
                    <OPTION> Demineur
                    <OPTION> Loterie
                </SELECT>
            </FORM>
        </div>
        <div class="block-top">
            <div id="block-file">
            <button type="button" onclick="window.location.href = 'forumcreate.php'" class="button-di">CREER UN SUJET</button>
            </div>
        </div>
    </div>
    <main>
    <form id="form-modifier" action="sendforum.php?id=<?php $id?>" method="POST">
        <select name="jeux" class="select">
             <option value='1' selected>Loterie</option>
             <option value='2' >Demineur</option>
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