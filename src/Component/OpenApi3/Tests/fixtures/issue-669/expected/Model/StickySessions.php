<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class StickySessions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An attribute indicating how and if requests from a client will be persistently served by the same backend Droplet. The possible values are `cookies` or `none`.
     *
     * @var string
     */
    public string $type = 'none';
    /**
     * The name of the cookie sent to the client. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @var string
     */
    public string $cookieName;
    /**
     * The number of seconds until the cookie set by the load balancer expires. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @var int
     */
    public int $cookieTtlSeconds;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'cookieName' => 'cookie_name', 'cookieTtlSeconds' => 'cookie_ttl_seconds'];
    }
}