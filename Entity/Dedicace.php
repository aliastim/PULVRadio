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
 * @ORM\Entity(repositoryClass="App\Repository\DedicaceRepository")
 * @ORM\Table(name="dedicace")
 */
class Dedicace
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
     * @ORM\Column(type="text")
     */
    private $dedicace;

    const MAX_PER_PAGE       = 10;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Dedicace
     *
     * @param int $id
     */
    public function setId($id): Dedicace
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
     * @return Dedicace
     * @param string $pseudo
     */
    public function setPseudo($pseudo): Dedicace
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDedicace(): ?string
    {
        return $this->dedicace;
    }

    /**
     * @return Dedicace
     * @param string $dedicace
     */
    public function setDedicace($dedicace): Dedicace
    {
        $this->dedicace = $dedicace;

        return $this;
    }

}