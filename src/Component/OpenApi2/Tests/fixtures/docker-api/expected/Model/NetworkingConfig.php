<?php

namespace Docker\Api\Model;

class NetworkingConfig
{
    /**
     * A mapping of network name to endpoint configuration for that network.
     * 
     *
     * @var array<string, EndpointSettings>
     */
    public iterable $endpointsConfig;
}