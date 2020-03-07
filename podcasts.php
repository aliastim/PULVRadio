<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

use App\Entity\Podcast;
$page = intval($_GET['page'] ?? 1);
if (is_int($page) AND $page !== 0) {
    $repo_Podcast = $entityManager->getRepository(Podcast::class);
    /*$podcasts = $repo_Podcast->findBy(
        array(),
        array('id' => 'DESC'),
        20,
        0
    );*/
    $podcasts = $repo_Podcast->findBy(
        array(),
        array('id' => 'DESC'),
        Podcast::MAX_PER_PAGE,
        ($page - 1) * Podcast::MAX_PER_PAGE
    );
    $count         = $repo_Podcast->count([]); //Nombre de podcasts
    $maxPagination = (int)ceil($count / Podcast::MAX_PER_PAGE);
    $minPage       = (int)max(1, ($page - 1));
    $maxPage       = (int)max($maxPagination, ($page + 1));
    $max           = 0;

    while (abs($minPage - $maxPage) < 15) {
        if ($minPage > 1) {
            $minPage--;
        }
        if ($maxPage < $maxPagination) {
            $maxPage++;
        }
        $max++;
        if ($max > 10) {
            break;
        }
    }

}else
{
    header('Location:podcasts.php?page=1');
}

if (isset($_SESSION['isConnected']) and !empty($_SESSION['isConnected']))
{
    echo $twig->render('podcasts.html.twig', [
        'title' => 'PULVRadio - Écoutez nos podcasts',
        'isConnected' => isset($_SESSION['isConnected']),
        'morceaux' => $derniers_morceaux,
        'auditeurs' => $nombre_d_autiteurs,
        'morceau_en_cours' => $morceau_en_cours,
        'dedicaces' => $dedicaces,
        'url' => $url,
        'podcasts' => $podcasts,
        'currentPage' => $page,
        'maxPagination' => $maxPagination,
        'minPage' => $minPage,
        'maxPage' => $maxPage,
        'user' => $_SESSION,
    ]);
}
else
    {
        echo $twig->render('podcasts.html.twig', [
            'title' => 'PULVRadio - Écoutez nos podcasts',
            'isConnected' => isset($_SESSION['isConnected']),
            'morceaux' => $derniers_morceaux,
            'auditeurs' => $nombre_d_autiteurs,
            'morceau_en_cours' => $morceau_en_cours,
            'dedicaces' => $dedicaces,
            'podcasts' => $podcasts,
            'currentPage' => $page,
            'maxPagination' => $maxPagination,
            'minPage' => $minPage,
            'maxPage' => $maxPage,
            'url' => $url,
        ]);
}