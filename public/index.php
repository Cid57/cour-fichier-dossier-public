<?php


// recupération du parametre de la page
$page = !empty($_GET['page']) ? $_GET['page'] : 'index';

//verification de l'existence de la page
$path = '../src/pages/' . $page . '.php';
if (file_exists($path)) {

    // Db connect et chargement des variables globales

    // Chargement ds donnees pour la page
    require $path;

    // Inclusion de template correspondant a la page
    require '../templates/layout.html.php';
} else {
    // Erreur 404
    header('HTTP/1.1 404 Not Found');
    require '../templates/404.html.php';
}
