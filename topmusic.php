<?php
use App\Entity\Topmusic;
$repo_topmusic    = $entityManager->getRepository(Topmusic::class);
$topmusics = $repo_topmusic->findBy(
    array(),
    array('liked' => 'DESC'),
    10,
    0
);
$topmusic = $topmusics[0];


//dump($topmusics);
//dump($topmusic);