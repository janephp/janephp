<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6Create implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the region the reserved IPv6 will be reserved to.
     *
     * @var string
     */
    public string $regionSlug;
    public function definedProperties(): array
    {
        return ['regionSlug' => 'region_slug'];
    }
}