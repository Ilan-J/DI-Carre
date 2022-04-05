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
  <link rel="stylesheet" href="leaderboard.css">
  <title>Leaderboard</title>
</head>

<body>
  <?php
          include('head.php');

  ?>
  <h1 id="title-leaderboard" class="title-page">Leaderboard</h1>
<div class="wrapper">
    <div class="list">
      <div class="list__header">
        <h1>Demineur</h1>
      </div>
      <div class="list__body">
        <table class="list__table">
          <?php printleaderboard(1); ?>
        </table>
      </div>
    </div>
  </div>
  <?php
        include('footer.html');
    ?>
</body>

</html>