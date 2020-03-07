<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 15/12/2017
 * Time: 17:23
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PodcastRepository")
 * @ORM\Table(name="podcast")
 */
class Podcast
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
     * @var User
     *
     * @ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $file;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @var string
     * @ORM\Column(type="datetime")
     */
    private $date;

    const MAX_PER_PAGE       = 1;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Podcast
     *
     * @param int $id
     */
    public function setId($id): Podcast
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return User
     * @param User $pseudo
     */
    public function setUser($pseudo): Podcast
    {
        $this->user = $pseudo;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Podcast
     * @param string $name
     */
    public function setName($name): Podcast
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @return Podcast
     * @param string $file
     */
    public function setFile($file): Podcast
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return Podcast
     * @param string $type
     */
    public function setType($type): Podcast
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @return Podcast
     * @param string $message
     */
    public function setMessage($message): Podcast
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * @return Podcast
     * @throws \Exception
     */
    public function setDate(): Podcast
    {
        $this->date = new \DateTime('now');

        return $this;
    }

}