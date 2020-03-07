<?php

require __DIR__ . "/initialisation.php";
use App\Entity\Dedicace;

if( isset($_POST['pseudo']) and !empty($_POST['pseudo']) and isset($_POST['dedicace']) and !empty($_POST['dedicace']))
{
    $pseudo = $_POST['pseudo'];
    $message = $_POST['dedicace'];

    $repo = $entityManager->getRepository(Dedicace::class);
    $dedicace = new Dedicace();
    $dedicace->setPseudo($pseudo);
    $dedicace->setDedicace($message);

    $entityManager->persist($dedicace);
    $entityManager->flush();

    header('Location:index.php?dedicaceok');

} else
{
    echo 'aucune dédicace envoyée';
    header('Location:index.php');
}

