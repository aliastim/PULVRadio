<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

use App\Entity\User;
$repo_User   = $entityManager->getRepository(User::class);
$membres = $repo_User->findBy(
    array(),
    array('id' => 'DESC'),
    100,
    0
);

echo $twig->render('listemembres.html.twig', [
    'title' => 'PULVRadio - Liste des membres',
    'isConnected' => isset($_SESSION['isConnected']),
    'morceaux' => $derniers_morceaux,
    'auditeurs' => $nombre_d_autiteurs,
    'morceau_en_cours' => $morceau_en_cours,
    'dedicaces' => $dedicaces,
    'membres' => $membres,
    'url' => $url,
]);