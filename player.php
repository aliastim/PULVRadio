<?php

require __DIR__ . "/initialisation.php";

echo $twig->render('player.html.twig', [
    'title' => 'PULVRadio - Player',
    'isConnected' => isset($_SESSION['isConnected']),
]);