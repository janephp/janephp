<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SatelliteOrbit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A planet in the Scalar Galaxy
     *
     * @var Planet
     */
    protected $planet;
    /**
     * Orbital period in Earth days
     *
     * @var float
     */
    protected $orbitalPeriod;
    /**
     * Average distance from the planet in kilometers
     *
     * @var float
     */
    protected $distance;
    /**
     * A planet in the Scalar Galaxy
     *
     * @return Planet
     */
    public function getPlanet(): Planet
    {
        return $this->planet;
    }
    /**
     * A planet in the Scalar Galaxy
     *
     * @param Planet $planet
     *
     * @return self
     */
    public function setPlanet(Planet $planet): self
    {
        $this->initialized['planet'] = true;
        $this->planet = $planet;
        return $this;
    }
    /**
     * Orbital period in Earth days
     *
     * @return float
     */
    public function getOrbitalPeriod(): float
    {
        return $this->orbitalPeriod;
    }
    /**
     * Orbital period in Earth days
     *
     * @param float $orbitalPeriod
     *
     * @return self
     */
    public function setOrbitalPeriod(float $orbitalPeriod): self
    {
        $this->initialized['orbitalPeriod'] = true;
        $this->orbitalPeriod = $orbitalPeriod;
        return $this;
    }
    /**
     * Average distance from the planet in kilometers
     *
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }
    /**
     * Average distance from the planet in kilometers
     *
     * @param float $distance
     *
     * @return self
     */
    public function setDistance(float $distance): self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['planet' => ['planet', 'getPlanet', 'setPlanet'], 'orbitalPeriod' => ['orbitalPeriod', 'getOrbitalPeriod', 'setOrbitalPeriod'], 'distance' => ['distance', 'getDistance', 'setDistance']];
    }
}