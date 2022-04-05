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
    <title>DI²</title>
</head>
<body>
    <?php
        include ('head.html');
    ?>
    <div id="block-main">
        <div id="presentation">
            <?php
            if (isset($_SESSION['user']['key'])){
                echo "<a href='deco.php'>Se deconnecter</a>";
            }
            ?>
            <h2>Presentation</h2>
            <div id="block-presentation-logo">
                <div>Nous sommes des etudiants en Developpement Informatique Réalisant un projet de jeux, Venez découvrir notre selection de jeux moderne. N'hésitez pas à nous contacter pour :)</div>
                <img src="images/logo.png"width="150px" height="150px" alt="Logo Groupe">
            </div>
        </div>
        
        <div id="jeu-principal">
            <img id="imgjeux" src="images/BJ-removebg-preview.png" width="100%" height="80%" alt="Logo Groupe">
            <a id="accesjeux"><div>Acceder aux jeux</div></a>
        </div>

        <div id="nouveautes">
            <h1>Nouveautés</h1>
            <div class="nouvelle">Ouverture de notre site web au niveau mondial.</div>
            <div class="nouvelle">La renovation de notre site web est en cours 😀</div>
        </div>
    </div>
    <?php
        include("footer.html");
    ?>
</body>
</html>