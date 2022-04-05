<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="head.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>

<header>
    <div id="root">
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
                <a class="topnav_link" href="profil.php">PROFIL</a>
                <a class="topnav_link" href="admin.php">ADMIN</a>
            </nav>

            <a href="connexion.html" class="onglet">
                <div id="grid_connexion">
                    CONNEXION
                </div>
            </a>

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
                    <li><a href="profil.php">PROFIL</a></li>
                    <li><a href="admin.php">ADMIN</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>