<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

use App\Entity\User;
use App\Entity\Forum;
$repo_Forum     = $entityManager->getRepository(Forum::class);
$messages_forum = $repo_Forum->findBy(
    array(),
    array('id' => 'DESC'),
    10,
    0
);

if (isset($_SESSION['isConnected']) and !empty($_SESSION['isConnected']))
{
    echo $twig->render('forum.html.twig', [
        'title' => 'PULVRadio - Le Forum !',
        'isConnected' => isset($_SESSION['isConnected']),
        'username' => $_SESSION['pseudo'],
        'userid' => $_SESSION['id'],
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'url' => $url,
        'messages' => $messages_forum,
        'pulvjump' => isset($_GET['pulvjump']),
        'forum' => isset($_GET['forum']),
    ]);
} else
{
    echo $twig->render('forum.html.twig', [
        'title' => 'PULVRadio - Le Forum !',
        'isConnected' => isset($_SESSION['isConnected']),
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'url' => $url,
        'messages' => $messages_forum,
        'pulvjump' => isset($_GET['pulvjump']),
        'forum' => isset($_GET['forum']),
    ]);
}

