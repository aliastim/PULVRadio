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
 * @ORM\Entity(repositoryClass="App\Repository\UserRepo")
 * @ORM\Table(name="user")
 */
class User
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
     * @ORM\Column(type="string")
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $admin;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $avatar;

    const MAX_PER_PAGE       = 10;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return User
     *
     * @param int $id
     */
    public function setId($id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @return User
     * @param string $pseudo
     */
    public function setPseudo($pseudo): User
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    /**
     * @return User
     * @param string $admin
     */
    public function setAdmin($admin): User
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return User
     *
     * @param string $password
     */
    public function setPassword($password): User
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @return User
     * @param string $avatar
     */
    public function setAvatar($avatar): User
    {
        $this->avatar = $avatar;

        return $this;
    }
}