<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>DI²</title>

</head>
<body>
    <?php
        include('head.php');
    ?>
    <main>
    <div id="block-main">
        <div id="presentation">
            <h2 class="title-page">Presentation</h2>
            <div id="block-presentation-logo">
                <div>Nous sommes des Etudiants en Developpement Informatique Réalisant un projet de jeux. Ilan Jaglin, David Lansonneur et Ilan Loore, nous allons vous faire plonger dans un monde moderne avec des design à couper le soufle. Nous sommes heureux de vous présenter le futur site de jeux vidéo en ligne ! Venez découvrir notre selection de jeux moderne. N'hésitez pas à nous contacter pour en savoir davantage.😀</div>
            </div>
        </div>

        <div id="jeu-principal">
            <img id="imgjeux" src="images/main-image-game.jpg" width="100%" height="80%" alt="Logo Groupe">
            <button id="accesjeux" class="button-di" onclick="window.location.href = 'jeux.php';" >ACCEDER AUX JEUX</button>
        </div>

        <div id="nouveautes">
            <h1>Nouveautés</h1>
            <div class="nouvelle"><p>Ouverture de notre site web au niveau mondial.</p></div>
            <div class="separation-nouvelle"></div>
            <div class="nouvelle"><p>La renovation de notre site web est en cours 😀</p></div>
        </div>
    </div>
    </main>
    <?php
        include("footer.html");
    ?>
</body>
<link rel="stylesheet" href="indexcss.css">
</html>