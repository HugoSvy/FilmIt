<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_liste.css">
    <title>Movie App</title>
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="logo">
            <h1 class="logo_title">
                <img src="./images/logo.png" alt="Logo FilmIt" class="logo">
                <span>FilmIt!</span>
            </h1>
        </a>
        <ul>
        <li><a href="index.php" class="nav-link">Accueil</a></li>
        <li><a href="liste.php" class="nav-link">Rechercher</a></li>
        <li><a href="votre_liste.php" class="nav-link">Votre Liste</a></li>
        <li>
            <?php
            // Démarrer la session
            session_start();

            // Vérifier si l'utilisateur est connecté
            if (isset($_SESSION['utilisateur'])) {
                echo '<a href="deconnexion.php" class="nav-link">Déconnexion</a>';
            } else {
                echo '<a href="login.php" class="nav-link">Connexion</a>';
            }
            ?>
        </li>
        <li>
            <?php
            // Vérifier si l'utilisateur est connecté
            if (isset($_SESSION['utilisateur'])) {
                echo '<span class="nav-link">Bienvenue ' . $_SESSION['utilisateur'] . ' !</span>';
            }
            ?>
        </li>
    </ul>
    </nav>
    
    <header>
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>
        
        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 
        
        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>

    <script src="scripts/script_liste.js"></script>
</body>
</html>
