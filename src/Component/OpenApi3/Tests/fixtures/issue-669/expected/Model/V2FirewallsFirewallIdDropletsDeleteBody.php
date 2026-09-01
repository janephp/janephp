<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2FirewallsFirewallIdDropletsDeleteBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array containing the IDs of the Droplets to be removed from the firewall.
     *
     * @var list<int>
     */
    public array $dropletIds;
    public function definedProperties(): array
    {
        return ['dropletIds' => 'droplet_ids'];
    }
}