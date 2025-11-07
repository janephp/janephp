<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2FirewallsFirewallIdDropletsPostBody extends \ArrayObject
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
     * An array containing the IDs of the Droplets to be assigned to the firewall.
     *
     * @var list<int>
     */
    protected $dropletIds;
    /**
     * An array containing the IDs of the Droplets to be assigned to the firewall.
     *
     * @return list<int>
     */
    public function getDropletIds(): array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets to be assigned to the firewall.
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