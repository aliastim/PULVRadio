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
 * @ORM\Entity(repositoryClass="App\Repository\ActualiteRepository")
 * @ORM\Table(name="actualite")
 */
class Actualite
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
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @var string
     * @ORM\Column(type="datetime")
     */
    private $date;

    const MAX_PER_PAGE       = 10;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Actualite
     *
     * @param int $id
     */
    public function setId($id): Actualite
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
    public function setUser($pseudo): Actualite
    {
        $this->user = $pseudo;

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
     * @return Actualite
     * @param string $message
     */
    public function setMessage($message): Actualite
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
     * @return Actualite
     * @throws \Exception
     */
    public function setDate(): Actualite
    {
        $this->date = new \DateTime('now');

        return $this;
    }

}