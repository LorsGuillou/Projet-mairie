<?php

require_once "Article.php";

$agenda1 = new Article (
    "Marché de Noël",
    "Evènement",
    "Le tout premier ici à Saint-Rivoal est lancé cette année.",
    "style/images/marche_noel.jpg",
    "Blabla",
    "à partir du 15/12/2021"
);

$agenda2 = new Article (
    "Reprise du breton",
    "Evènement",
    "Les cours de breton de Kergombou sont bientôt de retour.",
    "style/images/breton.jpg",
    "Blabla",
    "à partir du 03/12/2021"
);

$agenda3 = new Article (
    "L'auberge rouvre ses portes",
    "Evènement",
    "Le restaurant de Saint-Rivoal vous accueille de nouveau avec une nouvelle direction.",
    "style/images/restaurant.jpg",
    "Blabla",
    "à partir du 01/12/2021"
);

$evenements = [$agenda1, $agenda2, $agenda3];