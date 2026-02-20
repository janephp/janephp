<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class PlanetAtmosphereItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $compound;
    /**
     * @var float
     */
    protected $percentage;
    /**
     * @return string
     */
    public function getCompound(): string
    {
        return $this->compound;
    }
    /**
     * @param string $compound
     *
     * @return self
     */
    public function setCompound(string $compound): self
    {
        $this->initialized['compound'] = true;
        $this->compound = $compound;
        return $this;
    }
    /**
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }
    /**
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}