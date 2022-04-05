<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Jeux Vidéos</title>
</head>

<body>
    <?php
        include ('head.html');
    ?>
    <main>
        <h1 id="title-jeu-videos">Jeux Vidéos</h1>
        <div id="jeu-demineur">
            <header>
                <h1>Jeu du demineur inversé</h1>
                <p>Objectif : trouver la bombe en un minimun d'essais</p>
                <p id="tries"></p>
            </header>
            <div class="board">
                <div class="row" id="row-0">
                <div class="tile" id="tile-0-0" onclick="doClick('tile-0-0')"></div>
                <div class="tile" id="tile-0-1" onclick="doClick('tile-0-1')"></div>
                <div class="tile" id="tile-0-2" onclick="doClick('tile-0-2')"></div>
                <div class="tile" id="tile-0-3" onclick="doClick('tile-0-3')"></div>
                </div>
                <div class="row" id="row-1">
                <div class="tile" id="tile-1-0" onclick="doClick('tile-1-0')"></div>
                <div class="tile" id="tile-1-1" onclick="doClick('tile-1-1')"></div>
                <div class="tile" id="tile-1-2" onclick="doClick('tile-1-2')"></div>
                <div class="tile" id="tile-1-3" onclick="doClick('tile-1-3')"></div>
                </div>
                <div class="row" id="row-2">
                <div class="tile" id="tile-2-0" onclick="doClick('tile-2-0')"></div>
                <div class="tile" id="tile-2-1" onclick="doClick('tile-2-1')"></div>
                <div class="tile" id="tile-2-2" onclick="doClick('tile-2-2')"></div>
                <div class="tile" id="tile-2-3" onclick="doClick('tile-2-3')"></div>
                </div>
                <div class="row" id="row-3">
                <div class="tile" id="tile-3-0" onclick="doClick('tile-3-0')"></div>
                <div class="tile" id="tile-3-1" onclick="doClick('tile-3-1')"></div>
                <div class="tile" id="tile-3-2" onclick="doClick('tile-3-2')"></div>
                <div class="tile" id="tile-3-3" onclick="doClick('tile-3-3')"></div>
                </div>
            </div>
            <p id='tries'></p>
        </div>
        <div id="block-jeu-ligne1" class="block-jeu-ligne">
            <div class="block-jeu">
                <img src="images/demineur.png" alt="image d'un site web"/>
                <h3>Demineur</h3>
                <div class="jeu-paragraphe-bouton">
                    <p>Decouvrez notre premier jeu, le Demineur ! Incroyablement intuitif et exeptionnel. Le gameplay est ahurissant.</p>
                <button id="boutton-demineur" onclick="cacahuette();"  href="#jeu-demineur" >
                    <img src="images/bouton-jouer.png" alt="logo lien externe" class="fenetre-modale"/>
                </button>
                </div>
            </div>
            <div class="block-jeu">
                <img src="images/demineur.png" alt="image d'un site web"/>
                <h3>Demineur</h3>
                <div class="jeu-paragraphe-bouton">
                    <p>Decouvrez notre premier jeu, le Demineur ! Incroyablement intuitif et exeptionnel. Le gameplay est ahurissant.</p>
                <button>
                    <img src="images/bouton-jouer.png" alt="logo lien externe" class="fenetre-modale"/>
                </button></div>
            </div>
        </div>
    </main>
  <?php
        include('footer.html');
    ?>
</body>

</html>