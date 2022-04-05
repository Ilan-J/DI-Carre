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
    <h1 id="title-admin">Admin</h1>
    <main>
        <div class="admin-user" id="block-admin-user">
            <h2>Utilisateurs</h2>
            <div id="toi-cacher" class="info-user">
                <img src="images/transparent.png" alt="image utilisateur">
                <h3>PSEUDO</h3>
                <h3>PRENOM</h3>
                <h3>NOM</h3>
                <p>DESCRIPTION</p>
                <h3>DATE DE NAISSANCE</h3>
                <h3>DATE D'INSCRIPTION</h3>
            </div>
            <?php printutilisateur(); ?>
            </div>
        </div>

        <div class="admin-user" id="block-admin-user">
            <h2>Forum</h2>
            <?php
                $art = printarticleAdmin();
            ?>
        </div>
    </main>
    <?php
        include("footer.html");
    ?>
</body>

</html>