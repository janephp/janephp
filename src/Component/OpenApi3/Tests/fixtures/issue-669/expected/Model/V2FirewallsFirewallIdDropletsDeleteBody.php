<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2FirewallsFirewallIdDropletsDeleteBody implements AdditionalPropertiesInterface
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
     * An array containing the IDs of the Droplets to be removed from the firewall.
     *
     * @var list<int>
     */
    protected $dropletIds;
    /**
     * An array containing the IDs of the Droplets to be removed from the firewall.
     *
     * @return list<int>
     */
    public function getDropletIds(): array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets to be removed from the firewall.
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
    public function definedProperties(): array
    {
        return ['dropletIds' => ['droplet_ids', 'getDropletIds', 'setDropletIds']];
    }
}