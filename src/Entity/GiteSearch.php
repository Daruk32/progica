<?php

namespace App\Entity;

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
}