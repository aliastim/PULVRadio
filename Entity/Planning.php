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
 * @ORM\Entity(repositoryClass="App\Repository\PlanningRepository")
 * @ORM\Table(name="planning")
 */
class Planning
{

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $horaire;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $lundi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $mardi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $mercredi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $jeudi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $vendredi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $samedi;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $dimanche;

    /**
     * @return string
     */
    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    /**
     * @return Planning
     * @param string $horaire
     */
    public function setHoraire($horaire): Planning
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * @return string
     */
    public function getLundi(): ?string
    {
        return $this->lundi;
    }

    /**
     * @return Planning
     * @param string $lundi
     */
    public function setLundi($lundi): Planning
    {
        $this->lundi = $lundi;

        return $this;
    }

    /**
     * @return string
     */
    public function getMardi(): ?string
    {
        return $this->mardi;
    }

    /**
     * @return Planning
     * @param string $mardi
     */
    public function setMardi($mardi): Planning
    {
        $this->mardi = $mardi;

        return $this;
    }

    /**
     * @return string
     */
    public function getMercredi(): ?string
    {
        return $this->mercredi;
    }

    /**
     * @return Planning
     * @param string $mercredi
     */
    public function setMercredi($mercredi): Planning
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    /**
     * @return string
     */
    public function getJeudi(): ?string
    {
        return $this->jeudi;
    }

    /**
     * @return Planning
     * @param string $jeudi
     */
    public function setJeudi($jeudi): Planning
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    /**
     * @return string
     */
    public function getVendredi(): ?string
    {
        return $this->vendredi;
    }

    /**
     * @return Planning
     * @param string $vendredi
     */
    public function setVendredi($vendredi): Planning
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    /**
     * @return string
     */
    public function getSamedi(): ?string
    {
        return $this->samedi;
    }

    /**
     * @return Planning
     * @param string $samedi
     */
    public function setSamedi($samedi): Planning
    {
        $this->samedi = $samedi;

        return $this;
    }

    /**
     * @return string
     */
    public function getDimanche(): ?string
    {
        return $this->dimanche;
    }

    /**
     * @return Planning
     * @param string $dimanche
     */
    public function setDimanche($dimanche): Planning
    {
        $this->dimanche = $dimanche;

        return $this;
    }

}