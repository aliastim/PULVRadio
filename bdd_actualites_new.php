<?php

require __DIR__ . "/initialisation.php";

use App\Entity\Actualite;
use App\Entity\User;

//dump($_POST);
if (isset($_POST['message']) and isset($_SESSION['pseudo']))
{
    if (!empty($_POST['message']) and !empty($_SESSION['pseudo']))
    {
        $message = $_POST['message'];
        $username = $_SESSION['pseudo'];
        $userid = $_SESSION['id'];

        $repo_user     = $entityManager->getRepository(User::class);

        try {
            $user_verify = $repo_user->findOneBy(array('pseudo' => $username));

            if ($user_verify === null) {
                $url = $_POST['url'];
                header('Location:'.$url);

            } else
            {
                $repo_message     = $entityManager->getRepository(Actualite::class);

                $actu = new Actualite();
                $actu->setMessage($message);
                $actu->setUser($user_verify);
                $actu->setDate();

                $entityManager->persist($actu);
                $entityManager->flush();

                if (isset($_POST['url']) and !empty($_POST['url']))
                {
                    $url = $_POST['url'];
                    header('Location:'.$url);
                } else
                {
                    header('Location:actualites.php');
                }
            }
        } catch (\PDOException $e)
        {
            header('Location:actualites.php');
            echo 'erreur', $e->getMessage();
        }
    } else
    {
        // Pas de message ou utilisateur non connecté
        if (isset($_POST['url']) and !empty($_POST['url']))
        {
            $url = $_POST['url'];
            header('Location:'.$url);
        } else
        {
            header('Location:index.php');
        }
    }
} else
{
    if (isset($_POST['url']) and !empty($_POST['url']))
    {
        $url = $_POST['url'];
        header('Location:'.$url);
    } else
    {
        header('Location:index.php');
    }
}
