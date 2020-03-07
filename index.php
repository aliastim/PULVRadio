<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
require "topmusic.php";
require "derniereactu.php";
require "dernierpodcast.php";
//dump($_SESSION);
$url = $_SERVER['PHP_SELF'] ;



echo $twig->render('homepage.html.twig', [
    'title' => 'PULVRadio - La webradio du pôle Léonard de Vinci',
    'isConnected' => isset($_SESSION['isConnected']),
    'morceaux' => $derniers_morceaux,
    'auditeurs' => $nombre_d_autiteurs,
    'morceau_en_cours' => $morceau_en_cours,
    'dedicaces' => $dedicaces,
    'url' => $url,
    'topmusic' => $topmusic,
    'actu' => $derniere_actu,
    'podcast' => $dernier_podcast,
]);