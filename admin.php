<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
require "planning_function.php";
//dump($_SESSION);
$url = $_SERVER['PHP_SELF'] ;


echo $twig->render('admin.html.twig', [
    'title' => 'PULVRadio - Espace Admin',
    'isConnected' => isset($_SESSION['isConnected']),
    'morceaux' => $derniers_morceaux,
    'auditeurs' => $nombre_d_autiteurs,
    'morceau_en_cours' => $morceau_en_cours,
    'dedicaces' => $dedicaces,
    'url' => $url,

    'lundiav6' => $lundiav6,
    'mardiav6' => $mardiav6,
    'mercrediav6' => $mercrediav6,
    'jeudiav6' => $jeudiav6,
    'vendrediav6' => $vendrediav6,
    'samediav6' => $samediav6,
    'dimancheav6' => $dimancheav6,

    'lundi6_7' => $lundi6_7,
    'mardi6_7' => $mardi6_7,
    'mercredi6_7' => $mercredi6_7,
    'jeudi6_7' => $jeudi6_7,
    'vendredi6_7' => $vendredi6_7,
    'samedi6_7' => $samedi6_7,
    'dimanche6_7' => $dimanche6_7,

    'lundi7_8' => $lundi7_8,
    'mardi7_8' => $mardi7_8,
    'mercredi7_8' => $mercredi7_8,
    'jeudi7_8' => $jeudi7_8,
    'vendredi7_8' => $vendredi7_8,
    'samedi7_8' => $samedi7_8,
    'dimanche7_8' => $dimanche7_8,

    'lundi8_9' => $lundi8_9,
    'mardi8_9' => $mardi8_9,
    'mercredi8_9' => $mercredi8_9,
    'jeudi8_9' => $jeudi8_9,
    'vendredi8_9' => $vendredi8_9,
    'samedi8_9' => $samedi8_9,
    'dimanche8_9' => $dimanche8_9,
]);