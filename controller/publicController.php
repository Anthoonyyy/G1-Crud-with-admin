<?php
/*
Gère le site pour un visiteur non connecté
*/
//si on est sur l'accueil, chargement de tous les geoloc

$datas = getAllGeoloc($db); // on obtient un string (erreur sql), un tableau vide (pas de data), un tableau non vide(on a des datas)

// appel de la vue
include "../view/public/homepage.view.html.php";