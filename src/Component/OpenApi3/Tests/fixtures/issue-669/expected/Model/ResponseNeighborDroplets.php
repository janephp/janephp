<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseNeighborDroplets implements AdditionalPropertiesInterface
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
     * @var list<Droplet>
     */
    protected $droplets;
    /**
     * @return list<Droplet>
     */
    public function getDroplets(): array
    {
        return $this->droplets;
    }
    /**
     * @param list<Droplet> $droplets
     *
     * @return self
     */
    public function setDroplets(array $droplets): self
    {
        $this->initialized['droplets'] = true;
        $this->droplets = $droplets;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['droplets' => ['droplets', 'getDroplets', 'setDroplets']];
    }
}