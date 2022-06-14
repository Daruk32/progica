<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class GiteSearch
{
    /**
     * @return int|null 
     */
    private $minSurface;

    /**
     * @return int|null
     */
    private $minChambre;

    /**
     * @return int|null
     */
    private $minCouchage;

    /**
     * @return string|null
     */
    private $equipement;

    /**
     * @return int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @return self
     */
    public function setMinSurface($minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinChambre(): ?int
    {
        return $this->minChambre;
    }

    /**
     * @return self
     */
    public function setMinChambre($minChambre)
    {
        $this->minChambre = $minChambre;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinCouchage(): ?int
    {
        return $this->minCouchage;
    }

    /**
     * @return self
     */
    public function setMinCouchage($minCouchage)
    {
        $this->minCouchage = $minCouchage;

        return $this;
    }

    /**
     * Get the value of equipement
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set the value of equipement
     */
    public function setEquipement($equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }
}