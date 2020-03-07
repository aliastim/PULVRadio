<?php
use App\Entity\Dedicace;
$repo_dedicaces     = $entityManager->getRepository(Dedicace::class);
$dedicaces = $repo_dedicaces->findBy(
    array(),
    array('id' => 'DESC'),
    10,
    0
);

//dump($dedicaces);