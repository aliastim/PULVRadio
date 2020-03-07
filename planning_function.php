<?php
use App\Entity\Planning;
$repo_planning     = $entityManager->getRepository(Planning::class);

$planningav6 = $repo_planning->findOneBy(array('horaire' => '<6h'));
$lundiav6 = $planningav6->getLundi();
$mardiav6 = $planningav6->getMardi();
$mercrediav6 = $planningav6->getMercredi();
$jeudiav6 = $planningav6->getJeudi();
$vendrediav6 = $planningav6->getVendredi();
$samediav6 = $planningav6->getSamedi();
$dimancheav6 = $planningav6->getDimanche();

$planning6_7 = $repo_planning->findOneBy(array('horaire' => '06h-07h'));
$lundi6_7 = $planning6_7->getLundi();
$mardi6_7 = $planning6_7->getMardi();
$mercredi6_7 = $planning6_7->getMercredi();
$jeudi6_7 = $planning6_7->getJeudi();
$vendredi6_7 = $planning6_7->getVendredi();
$samedi6_7 = $planning6_7->getSamedi();
$dimanche6_7 = $planning6_7->getDimanche();

$planning7_8 = $repo_planning->findOneBy(array('horaire' => '07h-08h'));
$lundi7_8 = $planning7_8->getLundi();
$mardi7_8 = $planning7_8->getMardi();
$mercredi7_8 = $planning7_8->getMercredi();
$jeudi7_8 = $planning7_8->getJeudi();
$vendredi7_8 = $planning7_8->getVendredi();
$samedi7_8 = $planning7_8->getSamedi();
$dimanche7_8 = $planning7_8->getDimanche();

$planning8_9 = $repo_planning->findOneBy(array('horaire' => '08h-09h'));
$lundi8_9 = $planning8_9->getLundi();
$mardi8_9 = $planning8_9->getMardi();
$mercredi8_9 = $planning8_9->getMercredi();
$jeudi8_9 = $planning8_9->getJeudi();
$vendredi8_9 = $planning8_9->getVendredi();
$samedi8_9 = $planning8_9->getSamedi();
$dimanche8_9 = $planning8_9->getDimanche();

//dump($lundiav6);