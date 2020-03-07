<?php

require __DIR__ . "/initialisation.php";
require "api-radionomy.php";
require "dedicaces.php";
$url = $_SERVER['PHP_SELF'] ;

use App\Entity\User;

if (isset($_GET['utilisateur']) && !empty($_GET['utilisateur'])) {

    $username = $_GET['utilisateur'];
    $repo_user     = $entityManager->getRepository(User::class);

    try {
        $user_verify = $repo_user->findOneBy(array('pseudo' => $username));

        if ($user_verify === null) {
            $url = $_POST['url'];
            header('Location:'.$url);

        } else
        {
            $user_avatar = $user_verify->getAvatar();
            //$user_description = $user_verify->getDescription();
            //$user_sexe = $user_verify->getSexe();
            //$user_age = $user_verify->getAge();
            //$user_categorie_musique = $user_verify->getCategorie_musique();
            //$user_niveau = $user_verify->getNiveau();
            //$user_date_inscription = $user_verify->getDate_inscription();
            //$user_firstname = $user_verify->getFirstname();
            //$user_name = $user_verify->getName();
            //$user_mail = $user_verify->getMail();
            $user_statut = $user_verify->getAdmin();
            //dump($user_statut);

            echo $twig->render('utilisateur.html.twig', [
                'title' => 'PULVRadio - '. $username,
                'isConnected' => isset($_SESSION['isConnected']),
                'morceaux' => $derniers_morceaux,
                'auditeurs' => $nombre_d_autiteurs,
                'morceau_en_cours' => $morceau_en_cours,
                'dedicaces' => $dedicaces,
                'url' => $url,
                'user' => $username,
                'avatar' => $user_avatar,
                'statut' => $user_statut,
            ]);
        }
    } catch (\PDOException $e)
    {
        header('Location:index.php');
        echo 'erreur', $e->getMessage();
    }


} else
{
    header('Location:index.php');
}

