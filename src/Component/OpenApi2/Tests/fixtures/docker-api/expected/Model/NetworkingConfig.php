<?php

namespace Docker\Api\Model;

class NetworkingConfig
{
    /**
     * A mapping of network name to endpoint configuration for that network.
     * 
     *
     * @var iterable<string, EndpointSettings>
     */
    public iterable $endpointsConfig;
}