<?php

namespace Docker\Api\Model;

class NetworksIdConnectPostBody
{
    /**
     * The ID or name of the container to connect to the network.
     *
     * @var string
     */
    public string $container;
    /**
     * Configuration for a network endpoint.
     *
     * @var EndpointSettings
     */
    public EndpointSettings $endpointConfig;
}