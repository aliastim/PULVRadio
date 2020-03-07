<?php

require __DIR__ . "/initialisation.php";

use App\Entity\User;

if (isset($_POST['pseudo']) and !empty($_POST['pseudo']) and isset($_POST['password']) and !empty($_POST['password']))
{

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $repo     = $entityManager->getRepository(User::class);
    try
    {
        $bdd_verify = $repo->findOneBy(array('pseudo' => $pseudo));

        if($bdd_verify === null)
        {
            echo "Ce pseudo n'existe pas !";
            header('Location:compte.php?badusername');

        } else
        {
            echo 'ok';
            if ($pseudo === $bdd_verify->getPseudo() && password_verify($password, $bdd_verify->getPassword()))
            {
                $_SESSION['isConnected']= true;
                $_SESSION['id'] = $bdd_verify->getId();
                $_SESSION['pseudo'] = $bdd_verify->getPseudo();
                $_SESSION['admin'] = $bdd_verify->getadmin();
                $_SESSION['avatar'] = $bdd_verify->getAvatar();

                //dump($_SESSION);
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
                echo "Mot de passe incorrect";
                header('Location:compte.php?badpassword');
            }
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