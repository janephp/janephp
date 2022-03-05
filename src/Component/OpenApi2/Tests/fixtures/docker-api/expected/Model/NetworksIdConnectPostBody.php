<?php

namespace Docker\Api\Model;

class NetworksIdConnectPostBody
{
    /**
     * The ID or name of the container to connect to the network.
     *
     * @var string
     */
    protected $container;
    /**
     * Configuration for a network endpoint.
     *
     * @var EndpointSettings
     */
    protected $endpointConfig;
    /**
     * The ID or name of the container to connect to the network.
     *
     * @return string
     */
    public function getContainer() : string
    {
        return $this->container;
    }
    /**
     * The ID or name of the container to connect to the network.
     *
     * @param string $container
     *
     * @return self
     */
    public function setContainer(string $container) : self
    {
        $this->container = $container;
        return $this;
    }
    /**
     * Configuration for a network endpoint.
     *
     * @return EndpointSettings
     */
    public function getEndpointConfig() : EndpointSettings
    {
        return $this->endpointConfig;
    }
    /**
     * Configuration for a network endpoint.
     *
     * @param EndpointSettings $endpointConfig
     *
     * @return self
     */
    public function setEndpointConfig(EndpointSettings $endpointConfig) : self
    {
        $this->endpointConfig = $endpointConfig;
        return $this;
    }
}