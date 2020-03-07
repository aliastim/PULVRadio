<?php

require __DIR__ . "/initialisation.php";

use App\Entity\User;

if (isset($_POST['pseudo']) and !empty($_POST['pseudo']) and isset($_POST['password']) and !empty($_POST['password']))
{

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $avatar = "avatar1";

    $repo     = $entityManager->getRepository(User::class);
    try
    {
        $bdd_verify = $repo->findOneBy(array('pseudo' => $pseudo));

        if($bdd_verify === null)
        {
            echo "ok";
            $user = new User();
            $user->setPseudo($pseudo);
            $user->setPassword($password);
            $user->setAdmin("user");
            $user->setAvatar($avatar);

            $entityManager->persist($user);
            $entityManager->flush();

            if (isset($_POST['url']) and !empty($_POST['url']))
            {
                $url = $_POST['url'];
                header('Location:'.$url);
            } else
            {
                header('Location:index.php');
            }

        } else
        {
            echo "Ce existe déjà !";
            header('Location:compte.php?useralreadyexist');
        }
    }
    catch (\PDOException $e)
    {
        header('Location:index.php');
        echo 'erreur', $e->getMessage();
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