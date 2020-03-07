<?php

require __DIR__ . "/initialisation.php";

use App\Entity\Podcast;
use App\Entity\User;


if (isset($_POST['pseudo']) and isset($_POST['name']) and isset($_POST['message']) and isset($_FILES['file']) AND $_FILES['file']['error'] == 0)
{

    if (!empty($_POST['pseudo']) and !empty($_POST['name']) and !empty($_POST['message']))
    {
        // Vérification taille du fichier (inférieur à 1 Go)
        if ($_FILES['file']['size'] <= 1000000000)
        {
            $infosfichier = pathinfo($_FILES['file']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('mp3', 'wav', 'flac');

            // Vérifie l'extension du fichier
            if (in_array($extension_upload, $extensions_autorisees))
            {
                $repo_user     = $entityManager->getRepository(User::class);

                // Vérifie l'utilisateur
                try {
                    $user_verify = $repo_user->findOneBy(array('pseudo' => $_POST['pseudo']));

                    if ($user_verify === null) {
                        $url = $_POST['url'];
                        header('Location:'.$url);

                    } else
                    {
                        $repo_message     = $entityManager->getRepository(Podcast::class);

                        // Validation et stockage du fichier
                        $nom = md5(uniqid(rand(), true));
                        $nom_simple = "{$nom}.{$extension_upload}";
                        $nom = "podcasts/{$nom}.{$extension_upload}";


                        move_uploaded_file($_FILES['file']['tmp_name'],$nom);

                        $repo = $entityManager->getRepository(Podcast::class);

                        $podcast = new Podcast();
                        $podcast->setUser($user_verify);
                        $podcast->setName($_POST['name']);
                        $podcast->setFile($nom_simple);
                        $podcast->setType($_FILES['file']['type']);
                        $podcast->setMessage($_POST['message']);
                        $podcast->setDate();

                        $entityManager->persist($podcast);
                        $entityManager->flush();

                        if (isset($_POST['url']) and !empty($_POST['url']))
                        {
                            $url = $_POST['url'];
                            header('Location:'.$url.'?envoiok');
                        } else
                        {
                            header('Location:podcasts.php?envoiok');
                        }
                    }
                } catch (\PDOException $e)
                {
                    header('Location:actualites.php');
                    echo 'erreur', $e->getMessage();
                }


            } else
            {
                // extension erronnée
                if (isset($_POST['url']) and !empty($_POST['url']))
                {
                    $url = $_POST['url'];
                    header('Location:'.$url);
                } else
                {
                    header('Location:index.php');
                }
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