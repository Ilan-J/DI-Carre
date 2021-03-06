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
    <script src="script.js"></script>
    <title>Jeux Vidéos</title>
</head>

<body>
<?php
include('head.php');
?>
<h1 id="title-jeu-videos" class="title-page">Jeux Vidéos</h1>
<main>
    <div class="modale-demineur">
    <button class="close-button" onclick="closeModaleDemineur();">X</button>
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
                </div>
                <div class="row" id="row-1">
                    <div class="tile" id="tile-1-0" onclick="doClick('tile-1-0')"></div>
                    <div class="tile" id="tile-1-1" onclick="doClick('tile-1-1')"></div>
                    <div class="tile" id="tile-1-2" onclick="doClick('tile-1-2')"></div>
                </div>
                <div class="row" id="row-2">
                    <div class="tile" id="tile-2-0" onclick="doClick('tile-2-0')"></div>
                    <div class="tile" id="tile-2-1" onclick="doClick('tile-2-1')"></div>
                    <div class="tile" id="tile-2-2" onclick="doClick('tile-2-2')"></div>
                </div>
            </div>
            <p id='tries'></p>
        </div>
    </div>
    
    <div class="modale">
    <button class="close-button" onclick="closeModale();">X</button>
        <div id="jeu-loterie">
            <div id="titre-regle">
                <?php
                if(isset($_SESSION['user']['key'])){


                $score = getScore();
                echo"<h2>Score Actuel : $score</h2>"
                ?>
            </div>
            <div id="regle-loterie">
                Bonjour et Bienvenue sur le jeu de la lotterie <br>
                Le but est simple : vous commencez a 10 point, a chaque tour vous avez le choix entre :<br>
                Tenter de gagner 5 points en appuyant sur +5 (chance : 8 / 10)<br>
                Tenter de doubler la mise en appuyant sur DOUBLER (chance : 1 / 2)<br>
                Tenter de Tripler en appuyant sur Tripler (chance : 1 / 3)<br>
                Tenter de x100 en appuyant sur x100 (chance : 1 / 20)<br>
                Bonne chance
            </div>
            <form action='sendgamescore.php' method='post' id="form-loterie">
                <button name='button' type='submit' value='+5'>+5</button>
                <button name='button' type='submit' value='doubler'>Doubler</button>
                <button name='button' type='submit' value='x3'>Tripler</button>
                <button name='button' type='submit' value='x100'>x100</button>
            </form>
            <?php
            }else {
                echo "connectez vous pour jouer";
            }
            ?>
            </div>
        </div>
    </div>
    
    <div id="block-jeu-ligne1" class="block-jeu-ligne">
        <div class="block-jeu">
            <img src="images/demineur.png" alt="image d'un site web" class="main-image-game"/>
            <h3>Demineur inversé</h3>
            <div class="jeu-paragraphe-bouton">
                <p>Decouvrez notre premier jeu, le Demineur ! Incroyablement intuitif et exeptionnel. Le gameplay est ahurissant.</p>
                <button id="boutton-demineur" onclick="chargeModaleDemineur();"  href="#jeu-demineur" class="button-di">
                    <img src="images/play_arrow.svg" alt="logo lien play" class="image-play"/>
                </button>
            </div>
        </div>
        <div class="block-jeu">
            <img src="images/dice.jpg" alt="image d'un site web" class="main-image-game"/>
            <h3>Loterie</h3>
            <div class="jeu-paragraphe-bouton">
                <p>Venez jouer à la Loterie, plus d'une chance sur deux de gagner ! Seras-tu le plus chanceux de tous ?</p>
                <button class="button-di" onclick="chargeModale();">
                    <img src="images/play_arrow.svg" alt="logo lien play" class="image-play"/>
                </button>
            </div>
        </div>
    </div>
</main>
<?php
include('footer.html');
?>
<?php
if(isset($_GET["id"])){?>
    <script src="scriptonload.js"></script>
<?php
}
?>
</body>

</html>
