<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

use App\Entity\Actualite;
$repo_Actu     = $entityManager->getRepository(Actualite::class);
$messages_Actu = $repo_Actu->findBy(
    array(),
    array('id' => 'DESC'),
    10,
    0
);
$dernier_id = $messages_Actu[0]->getId();
//dump($dernier_id);

if (isset($_SESSION['isConnected']) and !empty($_SESSION['isConnected']))
{
    echo $twig->render('actualites.html.twig', [
        'title' => 'PULVRadio - Nous contacter',
        'isConnected' => isset($_SESSION['isConnected']),
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'url' => $url,
        'actus' => $messages_Actu,
        'dernierid' => $dernier_id,
        'user' => $_SESSION,
    ]);
} else
{
    echo $twig->render('actualites.html.twig', [
        'title' => 'PULVRadio - Nous contacter',
        'isConnected' => isset($_SESSION['isConnected']),
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'url' => $url,
        'actus' => $messages_Actu,
        'dernierid' => $dernier_id,
    ]);
}