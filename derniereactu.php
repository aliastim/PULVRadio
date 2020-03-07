<?php
use App\Entity\Actualite;
$repo_Actu     = $entityManager->getRepository(Actualite::class);
$messages_Actu = $repo_Actu->findBy(
    array(),
    array('id' => 'DESC'),
    1,
    0
);
$derniere_actu = $messages_Actu[0];
//dump($derniere_actu);