<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletNetworks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<NetworkV4>
     */
    public array $v4;
    /**
     * @var list<NetworkV6>
     */
    public array $v6;
    public function definedProperties(): array
    {
        return ['v4' => 'v4', 'v6' => 'v6'];
    }
}