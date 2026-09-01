<?php

namespace Docker\Api\Model;

class NetworkContainer
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $endpointID;
    /**
     * @var string
     */
    public string $macAddress;
    /**
     * @var string
     */
    public string $iPv4Address;
    /**
     * @var string
     */
    public string $iPv6Address;
}