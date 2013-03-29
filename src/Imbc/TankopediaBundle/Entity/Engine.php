<?php

namespace Imbc\TankopediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\EngineRepository")
 * @ORM\Table(name="top__module_engine")
 */
class Engine extends Module
{
    const gazoline = 'Gasoline';
    const diesel = 'Diesel';

    /**
     * @ORM\Column(name="power", type="integer")
     */
    private $power;

    /**
     * @ORM\Column(name="fireChance", type="integer")
     */
    private $fireChance;

    /**
     * @ORM\Column(name="fuelType", type="string")
     */
    private $fuelType;

    /**
     * Set power
     *
     * @param integer $power
     * @return Engine
     */
    public function setPower( $power )
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set fireChance
     *
     * @param integer $fireChance
     * @return Engine
     */
    public function setFireChance( $fireChance )
    {
        $this->fireChance = $fireChance;

        return $this;
    }

    /**
     * Get fireChance
     *
     * @return integer
     */
    public function getFireChance()
    {
        return $this->fireChance;
    }

    /**
     * Set fuelType
     *
     * @param string $fuelType
     * @return Engine
     */
    public function setFuelType( $fuelType )
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * Get fuelType
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }
}