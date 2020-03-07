<?php

require __DIR__ . "/initialisation.php";
use App\Entity\Topmusic;

if (isset($_POST['musicname']) and !empty($_POST['musicname']) and isset($_POST['musicartist']) and !empty($_POST['musicartist']))
{
    $musicname = $_POST['musicname'];
    $artist = $_POST['musicartist'];

    if (isset($_POST['like']) and !empty($_POST['like']))
    {
        echo "like détecté <br>";
        /*LA MUSIQUE EXISTE-T-ELLE DEJA EN BDD OU NON ?*/
        $repo     = $entityManager->getRepository(Topmusic::class);

        try
        {
            $bdd_verify = $repo->findOneBy(array('music' => $musicname));
            //dump($user_verify);
            if ($bdd_verify === null)
            {
                $topmusic = new Topmusic();
                $topmusic->setMusic($musicname);
                $topmusic->setArtist($artist);
                $topmusic->setLiked("1");
                $topmusic->setDisliked("0");
                //dump($topmusic);
                $entityManager->persist($topmusic);
                $entityManager->flush();

                //Fermeture de la page
                echo '<SCRIPT>window.close()</SCRIPT>';

            }
            else
            {
                echo "la musique existe déjà en bdd ==> AJOUT D'UN LIKE";
                //dump($bdd_verify);
                $likes = intval($bdd_verify->getLiked());
                $likes++;
                $likes = strval($likes);
                //dump($likes);

                $bdd_verify->setLiked($likes);

                $entityManager->persist($bdd_verify);
                $entityManager->flush();

                //Fermeture de la page
                echo '<SCRIPT>window.close()</SCRIPT>';
            }

        }
        catch (\PDOException $e)
        {
            echo 'erreur', $e->getMessage();
        }
    }
    elseif (isset($_POST['dislike']) and !empty($_POST['dislike']))
    {
        echo "dislike détecté <br>";
        /*LA MUSIQUE EXISTE-T-ELLE DEJA EN BDD OU NON ?*/

        $repo     = $entityManager->getRepository(Topmusic::class);

        try
        {
            $bdd_verify = $repo->findOneBy(array('music' => $musicname));
            //dump($user_verify);
            if ($bdd_verify === null)
            {
                $topmusic = new Topmusic();
                $topmusic->setMusic($musicname);
                $topmusic->setArtist($artist);
                $topmusic->setLiked("0");
                $topmusic->setDisliked("1");
                //dump($topmusic);
                $entityManager->persist($topmusic);
                $entityManager->flush();

                //Fermeture de la page
                echo '<SCRIPT>window.close()</SCRIPT>';
            }
            else
            {
                echo "la musique existe déjà en bdd ==> AJOUT D'UN DISLIKE";
                //dump($bdd_verify);
                $dislikes = intval($bdd_verify->getDisliked());
                $dislikes++;
                $dislikes = strval($dislikes);
                //dump($dislikes);

                $bdd_verify->setDisliked($dislikes);

                $entityManager->persist($bdd_verify);
                $entityManager->flush();

                //Fermeture de la page
                echo '<SCRIPT>window.close()</SCRIPT>';
            }

        }
        catch (\PDOException $e)
        {
            echo 'erreur', $e->getMessage();
        }
    }
    else
    {
        header('Location:index.php');
    }
} else
{
    echo 'aucune musique trouvée';
    header('Location:index.php');
}

