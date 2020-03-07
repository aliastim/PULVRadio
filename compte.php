<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
//dump($_SESSION);
$url = $_SERVER['PHP_SELF'] ;

if (isset($_SESSION['isConnected']) AND  $_SESSION['isConnected']=== true)
{

    if (isset($_GET['badusername']))
    {
        $badusername = "Mauvais pseudo";
    }

    if (isset($_GET['badpassword']))
    {
        $badpassword = "Mauvais mot de passe";
    }

    if (isset($_GET['useralreadyexist']))
    {
        $useralreadyexist = "Le pseudo existe déjà";
    }


    echo $twig->render('compte.html.twig', [
        'title' => 'PULVRadio - Espace Admin',
        'isConnected' => isset($_SESSION['isConnected']),
        'avatar' => $_SESSION['avatar'],
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'badusername' => isset($badusername),
        'badpassword' => isset($badpassword),
        'useralreadyexist' => isset($useralreadyexist),
        'url' => $url,
    ]);

} else
{
    echo $twig->render('compte.html.twig', [
        'title' => 'PULVRadio - Espace Admin',
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'badusername' => isset($badusername),
        'badpassword' => isset($badpassword),
        'useralreadyexist' => isset($useralreadyexist),
        'url' => $url,
    ]);
}