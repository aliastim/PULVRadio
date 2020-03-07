<?php

require __DIR__ . "/initialisation.php";

use App\Entity\Planning;

//dump($_POST);
if (isset($_POST['av6lundi']) and isset($_POST['av6mardi']) and isset($_POST['av6mercredi']) and isset($_POST['av6jeudi']) and isset($_POST['av6vendredi']) and isset($_POST['av6samedi']) and isset($_POST['av6dimanche']))
{
    if (!empty($_POST['av6lundi']) and !empty($_POST['av6mardi']) and !empty($_POST['av6mercredi']) and !empty($_POST['av6jeudi']) and !empty($_POST['av6vendredi']) and !empty($_POST['av6samedi']) and !empty($_POST['av6dimanche']))
    {

        $av6lundi = $_POST['av6lundi']; $av6mardi = $_POST['av6mardi']; $av6mercredi = $_POST['av6mercredi']; $av6jeudi = $_POST['av6jeudi']; $av6vendredi = $_POST['av6vendredi']; $av6samedi = $_POST['av6samedi']; $av6dimanche = $_POST['av6dimanche'];

        $repo     = $entityManager->getRepository(Planning::class);
        $planning = $repo->findOneBy(['horaire'=>"<6h"]);

        $planning->setLundi($av6lundi);
        $planning->setMardi($av6mardi);
        $planning->setMercredi($av6mercredi);
        $planning->setJeudi($av6jeudi);
        $planning->setVendredi($av6vendredi);
        $planning->setSamedi($av6samedi);
        $planning->setDimanche($av6dimanche);

        $entityManager->persist($planning);
        $entityManager->flush();
    }
}

if (isset($_POST['lundi6_7']) and isset($_POST['mardi6_7']) and isset($_POST['mercredi6_7']) and isset($_POST['jeudi6_7']) and isset($_POST['vendredi6_7']) and isset($_POST['samedi6_7']) and isset($_POST['dimanche6_7']))
{
    if (!empty($_POST['lundi6_7']) and !empty($_POST['mardi6_7']) and !empty($_POST['mercredi6_7']) and !empty($_POST['jeudi6_7']) and !empty($_POST['vendredi6_7']) and !empty($_POST['samedi6_7']) and !empty($_POST['dimanche6_7']))
    {

        $lundi6_7 = $_POST['lundi6_7']; $mardi6_7 = $_POST['mardi6_7']; $mercredi6_7 = $_POST['mercredi6_7']; $jeudi6_7 = $_POST['jeudi6_7']; $vendredi6_7 = $_POST['vendredi6_7']; $samedi6_7 = $_POST['samedi6_7']; $dimanche6_7 = $_POST['dimanche6_7'];

        $planning6_7 = $repo->findOneBy(['horaire'=>"06h-07h"]);

        $planning6_7->setLundi($lundi6_7);
        $planning6_7->setMardi($mardi6_7);
        $planning6_7->setMercredi($mercredi6_7);
        $planning6_7->setJeudi($jeudi6_7);
        $planning6_7->setVendredi($vendredi6_7);
        $planning6_7->setSamedi($samedi6_7);
        $planning6_7->setDimanche($dimanche6_7);

        $entityManager->persist($planning6_7);
        $entityManager->flush();
    }
}

if (isset($_POST['lundi7_8']) and isset($_POST['mardi7_8']) and isset($_POST['mercredi7_8']) and isset($_POST['jeudi7_8']) and isset($_POST['vendredi7_8']) and isset($_POST['samedi7_8']) and isset($_POST['dimanche7_8']))
{
    if (!empty($_POST['lundi7_8']) and !empty($_POST['mardi7_8']) and !empty($_POST['mercredi7_8']) and !empty($_POST['jeudi7_8']) and !empty($_POST['vendredi7_8']) and !empty($_POST['samedi7_8']) and !empty($_POST['dimanche7_8']))
    {

        $lundi7_8 = $_POST['lundi7_8']; $mardi7_8 = $_POST['mardi7_8']; $mercredi7_8 = $_POST['mercredi7_8']; $jeudi7_8 = $_POST['jeudi7_8']; $vendredi7_8 = $_POST['vendredi7_8']; $samedi7_8 = $_POST['samedi7_8']; $dimanche7_8 = $_POST['dimanche7_8'];

        $planning7_8 = $repo->findOneBy(['horaire'=>"07h-08h"]);

        $planning7_8->setLundi($lundi7_8);
        $planning7_8->setMardi($mardi7_8);
        $planning7_8->setMercredi($mercredi7_8);
        $planning7_8->setJeudi($jeudi7_8);
        $planning7_8->setVendredi($vendredi7_8);
        $planning7_8->setSamedi($samedi7_8);
        $planning7_8->setDimanche($dimanche7_8);

        $entityManager->persist($planning7_8);
        $entityManager->flush();

    }
}

if (isset($_POST['lundi8_9']) and isset($_POST['mardi8_9']) and isset($_POST['mercredi8_9']) and isset($_POST['jeudi8_9']) and isset($_POST['vendredi8_9']) and isset($_POST['samedi8_9']) and isset($_POST['dimanche8_9']))
{
    if (!empty($_POST['lundi8_9']) and !empty($_POST['mardi8_9']) and !empty($_POST['mercredi8_9']) and !empty($_POST['jeudi8_9']) and !empty($_POST['vendredi8_9']) and !empty($_POST['samedi8_9']) and !empty($_POST['dimanche8_9']))
    {

        $lundi8_9 = $_POST['lundi8_9']; $mardi8_9 = $_POST['mardi8_9']; $mercredi8_9 = $_POST['mercredi8_9']; $jeudi8_9 = $_POST['jeudi8_9']; $vendredi8_9 = $_POST['vendredi8_9']; $samedi8_9 = $_POST['samedi8_9']; $dimanche8_9 = $_POST['dimanche8_9'];

        $planning8_9 = $repo->findOneBy(['horaire'=>"08h-09h"]);

        $planning8_9->setLundi($lundi8_9);
        $planning8_9->setMardi($mardi8_9);
        $planning8_9->setMercredi($mercredi8_9);
        $planning8_9->setJeudi($jeudi8_9);
        $planning8_9->setVendredi($vendredi8_9);
        $planning8_9->setSamedi($samedi8_9);
        $planning8_9->setDimanche($dimanche8_9);

        $entityManager->persist($planning8_9);
        $entityManager->flush();

        header('Location:admin.php');
    }
}






else
{
    /*
    if (isset($_POST['url']) and !empty($_POST['url']))
    {
        $url = $_POST['url'];
        header('Location:'.$url);
    } else
    {
        header('Location:index.php');
    }
    */
}