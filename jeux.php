<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

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
include('head.php');
?>
<main>
    <h1 id="title-jeu-videos" class="title-page">Jeux Vidéos</h1>
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
            <img src="images/demineur.png" alt="image d'un site web" class="main-image-game"/>
            <h3>Demineur</h3>
            <div class="jeu-paragraphe-bouton">
                <p>Decouvrez notre premier jeu, le Demineur ! Incroyablement intuitif et exeptionnel. Le gameplay est ahurissant.</p>
                <button id="boutton-demineur" onclick="cacahuette();"  href="#jeu-demineur" class="button-di">
                    <img src="images/play_arrow.svg" alt="logo lien play" class="image-play"/>
                </button>
            </div>
        </div>
        <div class="block-jeu">
            <img src="images/dice.jpg" alt="image d'un site web" class="main-image-game"/>
            <h3>Loterie</h3>
            <div class="jeu-paragraphe-bouton">
                <p>Venez jouer à la Loterie, plus d'une chance sur deux de gagner ! Seras-tu le plus chanceux de tous ?</p>
                <button class="button-di">
                    <img src="images/play_arrow.svg" alt="logo lien play" class="image-play"/>
                </button>
            </div>
        </div>
    </div>
</main>
<?php
include('footer.html');
?>
</body>

</html>
