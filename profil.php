<?php
require_once('bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Profil</title>
</head>

<body>
    <?php
        include('head.php');
    ?>
    <h1 id="title-jeu-videos" class="title-page">Profil</h1>
    <main id="block-profile">
        <?php
            printOneUtilisateur();
        ?>
    </main>
    <?php
        include("footer.html");
    ?>
</body>

</html>