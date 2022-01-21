<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Mairie de Saint-Rivoal</title>
</head>

<body>
  <header>
    <div id="top_menu">
      <div id="top_menu_content" class="container">
        <div id="languages">
          <a href="#"><img src="Images/drapeau_fr.jpg" alt="Français"></a>
          <a href="#"><img src="Images/drapeau-royaume-uni-1.jpg" alt="English"></a>
          <a href="#"><img src="Images/drapeau_bzh.jpg" alt="Brezhoneg"></a>
        </div>
        <div id="account">
          <a href="#">Espace personnel</a>
        </div>
      </div>
    </div>
    <div id="banner">
      <div id="title">
        <h1><a href="index.php">Saint-Rivoal<br><span>Commune vivante et solidaire</span></a></h1>
      </div>
      <div id="searchbar">
        <form action="recherche.php" method="get">
          <label for="search">Rechercher : <br></label>
          <input type="text" name="search" id="search" placeholder="Taper un mot-clé ou une expression">
       </form>
      </div>
    </div>
    <nav id="navigation">
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="navigation_list_small" class="container">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="news.php">Actualités</a></li>
          <li><a href="#">Agenda</a></li>
          <li><a href="#">Vie de la commune</a></li>
          <li><a href="#">Petites annonces</a></li>
          <li><a href="#">Découvrir Saint-Rivoal</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div id="navigation_list_wide" class="container">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="news.php">Actualités</a></li>
          <li><a href="#">Agenda</a></li>
          <li><a href="#">Vie de la commune</a></li>
          <li><a href="#">Petites annonces</a></li>
          <li><a href="#">Découvrir Saint-Rivoal</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>