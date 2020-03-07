<?php

require __DIR__ . "/initialisation.php";

use App\Entity\Forum;
use App\Entity\User;

//dump($_POST);
if (isset($_POST['message']) and isset($_POST['username']) and isset($_POST['userid']))
{
    if (!empty($_POST['message']) and !empty($_POST['username']) and !empty($_POST['userid']))
    {
        $message = $_POST['message'];
        $username = $_POST['username'];
        $userid = $_POST['userid'];

        $repo_user     = $entityManager->getRepository(User::class);

        try {
            $user_verify = $repo_user->findOneBy(array('pseudo' => $username));

            if ($user_verify === null) {
                $url = $_POST['url'];
                header('Location:'.$url);

            } else
            {
                $repo_message     = $entityManager->getRepository(Forum::class);

                $forum_message = new Forum();
                $forum_message->setMessage($message);
                $forum_message->setUser($user_verify);
                $forum_message->setDate();

                $entityManager->persist($forum_message);
                $entityManager->flush();

                if (isset($_POST['url']) and !empty($_POST['url']))
                {
                    $url = $_POST['url'];
                    header('Location:'.$url);
                } else
                {
                    header('Location:forum.php');
                }
            }
        } catch (\PDOException $e)
        {
            header('Location:forum.php');
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
