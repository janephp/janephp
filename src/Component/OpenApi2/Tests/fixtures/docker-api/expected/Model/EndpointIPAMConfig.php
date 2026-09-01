<?php

namespace Docker\Api\Model;

class EndpointIPAMConfig
{
    /**
     * @var string
     */
    public string $iPv4Address;
    /**
     * @var string
     */
    public string $iPv6Address;
    /**
     * @var list<string>
     */
    public array $linkLocalIPs;
}