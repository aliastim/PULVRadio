<?php
use App\Entity\Podcast;
$repo_Podcast     = $entityManager->getRepository(Podcast::class);
$podcasts = $repo_Podcast->findBy(
    array(),
    array('id' => 'DESC'),
    1,
    0
);
$dernier_podcast = $podcasts[0];
//dump($dernier_podcast);