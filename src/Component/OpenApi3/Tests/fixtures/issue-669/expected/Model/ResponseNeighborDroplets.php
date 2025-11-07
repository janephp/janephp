<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseNeighborDroplets extends \ArrayObject
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
}