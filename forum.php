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
            <h1>Forum</h1>
        </div>
        <div class="block-search">
        <form id="search" action="?id">
            <input type="text" name="recherche" placeholder="Votre recherche" />
            <input class="style-button" type="image" src="images/iconSearch.svg" height="25px" width="5px"/>
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
        <?php
            if(!isset($_GET['recherche'])){
                $art = printarticle();
            }else {
                $art = printsharticle($_GET['recherche']);
            }
        
        
        ?>
    </main>
  <?php
        include('footer.html');
    ?>
</body>

</html>