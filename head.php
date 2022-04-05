<?php
require_once ('bdd.php');

?>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>

<header>
    <div id="topnav" class="topnav">
        <a href="index.php">
            <img src="images/Logo.png"width="52px" height="52px" alt="Logo Groupe">
        </a>
        <!-- Classic Menu -->
        <nav role="navigation" id="topnav_menu">
            <a class="topnav_link" href="jeux.php">JEUX</a>
            <a class="topnav_link" href="forum.php">FORUM</a>
            <a class="topnav_link" href="leaderboard.php">LEADERBOARD</a>
            <a class="topnav_link" href="contact.php">CONTACT</a>
            <?php
            if (isset($_SESSION['user']['key'])){
                echo "<a class='topnav_link' href='profil.php'>PROFIL</a>";
            }?>
            <?php
            if (isset($_SESSION['admin'])) {
                if ($_SESSION['admin']===1) {
                    echo "<a class='topnav_link' href='admin.php'>ADMIN</a>";
                }
            }
            ?>
        </nav>
        <?php
        if (isset($_SESSION['user']['key'])){
            echo "<a href='deco.php' class='onglet'>
            <div id='grid_connexion'>
                DECONNEXION
            </div>
        </a>";

        }else {
            echo "
            <a href='connexion.html' class='onglet'>
            <div id='grid_connexion'>
                CONNEXION
            </div>
        </a>
        ";
        }
        ?>

        <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
            <!-- Some spans to act as a hamburger -->
            <span></span>
            <span></span>
            <span></span>
        </a>

        <!-- Responsive Menu -->
        <nav role="navigation" id="topnav_responsive_menu">
            <ul>
                <li><a href="jeux.php">JEUX</a></li>
                <li><a href="forum.php">FORUM</a></li>
                <li><a href="leaderboard.php">LEADERBOARD</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <?php
                    if (isset($_SESSION['user']['key'])){
                        echo "<li><a href='profil.php'>PROFIL</a></li>";
                    }?>
                    <?php
                    if (isset($_SESSION['admin'])) {
                        if ($_SESSION['admin']===1) {
                            echo "<li><a href='admin.php'>ADMIN</a></li>";
                        }
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>