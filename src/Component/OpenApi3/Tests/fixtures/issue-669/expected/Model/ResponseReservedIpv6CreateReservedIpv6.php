<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6CreateReservedIpv6 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @var string
     */
    public string $ip;
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @var string
     */
    public string $regionSlug;
    /**
     * @var \DateTime
     */
    public \DateTime $reservedAt;
    public function definedProperties(): array
    {
        return ['ip' => 'ip', 'regionSlug' => 'region_slug', 'reservedAt' => 'reserved_at'];
    }
}