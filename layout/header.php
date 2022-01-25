<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="./style/style.css">
  <title>Mairie de Saint-Rivoal</title>
</head>

<body>
<?php 
  require_once ("classes/bdd_actualite.php");
  require_once ("classes/bdd_agenda.php");
?>
  <header>
    <div id="top_menu">
      <div id="top_menu_content" class="container">
        <div id="languages">
          <a href="#"><img src="./style/images/drapeau_fr.jpg" alt="Français"></a>
          <a href="#"><img src="./style/images/drapeau-royaume-uni-1.jpg" alt="English"></a>
          <a href="#"><img src="./style/images/drapeau_bzh.jpg" alt="Brezhoneg"></a>
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
        <form action="recherche.php"  method="get">
          <label for="search">Rechercher : <br></label>
          <input type="text" name="search" id="search" placeholder="Taper un mot-clé ou une expression">
       </form>
      </div>
    </div>
  <?php include ("navigation.php"); ?>