<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PlanetPhysicalProperties implements AdditionalPropertiesInterface
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
     * Mass in Earth masses (must be greater than 0)
     *
     * @var float
     */
    protected $mass;
    /**
     * Radius in Earth radii (must be greater than 0)
     *
     * @var float
     */
    protected $radius;
    /**
     * Surface gravity in Earth g
     *
     * @var float
     */
    protected $gravity;
    /**
     * @var PlanetPhysicalPropertiesTemperature
     */
    protected $temperature;
    /**
     * Mass in Earth masses (must be greater than 0)
     *
     * @return float
     */
    public function getMass(): float
    {
        return $this->mass;
    }
    /**
     * Mass in Earth masses (must be greater than 0)
     *
     * @param float $mass
     *
     * @return self
     */
    public function setMass(float $mass): self
    {
        $this->initialized['mass'] = true;
        $this->mass = $mass;
        return $this;
    }
    /**
     * Radius in Earth radii (must be greater than 0)
     *
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }
    /**
     * Radius in Earth radii (must be greater than 0)
     *
     * @param float $radius
     *
     * @return self
     */
    public function setRadius(float $radius): self
    {
        $this->initialized['radius'] = true;
        $this->radius = $radius;
        return $this;
    }
    /**
     * Surface gravity in Earth g
     *
     * @return float
     */
    public function getGravity(): float
    {
        return $this->gravity;
    }
    /**
     * Surface gravity in Earth g
     *
     * @param float $gravity
     *
     * @return self
     */
    public function setGravity(float $gravity): self
    {
        $this->initialized['gravity'] = true;
        $this->gravity = $gravity;
        return $this;
    }
    /**
     * @return PlanetPhysicalPropertiesTemperature
     */
    public function getTemperature(): PlanetPhysicalPropertiesTemperature
    {
        return $this->temperature;
    }
    /**
     * @param PlanetPhysicalPropertiesTemperature $temperature
     *
     * @return self
     */
    public function setTemperature(PlanetPhysicalPropertiesTemperature $temperature): self
    {
        $this->initialized['temperature'] = true;
        $this->temperature = $temperature;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mass' => ['mass', 'getMass', 'setMass'], 'radius' => ['radius', 'getRadius', 'setRadius'], 'gravity' => ['gravity', 'getGravity', 'setGravity'], 'temperature' => ['temperature', 'getTemperature', 'setTemperature']];
    }
}