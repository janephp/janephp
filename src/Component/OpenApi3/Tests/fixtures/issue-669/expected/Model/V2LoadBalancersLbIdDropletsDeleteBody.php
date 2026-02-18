<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2LoadBalancersLbIdDropletsDeleteBody extends \ArrayObject
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
     * An array containing the IDs of the Droplets assigned to the load balancer.
     *
     * @var list<int>
     */
    protected $dropletIds;
    /**
     * An array containing the IDs of the Droplets assigned to the load balancer.
     *
     * @return list<int>
     */
    public function getDropletIds(): array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets assigned to the load balancer.
     *
     * @param list<int> $dropletIds
     *
     * @return self
     */
    public function setDropletIds(array $dropletIds): self
    {
        $this->initialized['dropletIds'] = true;
        $this->dropletIds = $dropletIds;
        return $this;
    }
}