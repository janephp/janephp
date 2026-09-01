<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @var string
     */
    public string $ip;
    /**
     * The date and time when the reserved IPv6 was reserved.
     *
     * @var \DateTime
     */
    public \DateTime $reservedAt;
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @var string
     */
    public string $regionSlug;
    /**
     * @var array<string, mixed>|Droplet
     */
    public $droplet;
    public function definedProperties(): array
    {
        return ['ip' => 'ip', 'reservedAt' => 'reserved_at', 'regionSlug' => 'region_slug', 'droplet' => 'droplet'];
    }
}