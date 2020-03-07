<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

echo $twig->render('contact.html.twig', [
    'title' => 'PULVRadio - Nous contacter',
    'isConnected' => isset($_SESSION['isConnected']),
    'morceaux' => $derniers_morceaux,
    'auditeurs' => $nombre_d_autiteurs,
    'morceau_en_cours' => $morceau_en_cours,
    'dedicaces' => $dedicaces,
    'url' => $url,
]);