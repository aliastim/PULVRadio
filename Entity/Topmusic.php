<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 15/12/2017
 * Time: 17:23
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\TopmusicRepository")
 * @ORM\Table(name="topmusic")
 */
class Topmusic
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $music;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $liked;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $disliked;


    const MAX_PER_PAGE       = 10;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Topmusic
     *
     * @param int $id
     */
    public function setId($id): Topmusic
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMusic(): ?string
    {
        return $this->music;
    }

    /**
     * @return Topmusic
     * @param string $music
     */
    public function setMusic($music): Topmusic
    {
        $this->music = $music;

        return $this;
    }

    /**
     * @return string
     */
    public function getArtist(): ?string
    {
        return $this->artist;
    }

    /**
     * @return Topmusic
     * @param string $artist
     */
    public function setArtist($artist): Topmusic
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * @return string
     */
    public function getLiked(): ?string
    {
        return $this->liked;
    }

    /**
     * @return Topmusic
     * @param string $liked
     */
    public function setLiked($liked): Topmusic
    {
        $this->liked = $liked;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisliked(): ?string
    {
        return $this->disliked;
    }

    /**
     * @return Topmusic
     * @param string $disliked
     */
    public function setDisliked($disliked): Topmusic
    {
        $this->disliked = $disliked;

        return $this;
    }


}