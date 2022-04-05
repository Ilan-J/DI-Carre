<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
}else {
    header('location:forum.php');
}
require_once('bdd.php')?>
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
        <?php printOnearticle($_GET['id']);
            $id = $_GET['id'];
            printmsg($_GET['id'])
        ?>
        <form id="form-reponse" action="sendmsg.php" method="POST">
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