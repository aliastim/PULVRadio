<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
//dump($_SESSION);
$url = $_SERVER['PHP_SELF'] ;


echo $twig->render('planning.html.twig', [
    'title' => 'PULVRadio - Planning',
    'isConnected' => isset($_SESSION['isConnected']),
    'morceaux' => $derniers_morceaux,
    'auditeurs' => $nombre_d_autiteurs,
    'morceau_en_cours' => $morceau_en_cours,
    'dedicaces' => $dedicaces,
    'url' => $url,
]);