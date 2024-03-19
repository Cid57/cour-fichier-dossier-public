<?php


// recupération du parametre de la page
$page = !empty($_GET['page']) ? $_GET['page'] : 'index';

//verification de l'existence de la page
$path = '../src/pages/' . $page . '.php';
if (file_exists($path)) {

    require $path;

    require '../templates/inc.top.html.php';
    require '../templates/' . $page . '.html.php';
    require '../templates/inc.bottom.html.php';
} else {
    // Erreur 404
    header('HTTP/1.1 404 Not Found');
    require '../templates/404.html.php';
}
