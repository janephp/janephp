<?php

namespace Docker\Api\Model;

class NetworksIdConnectPostBody
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['container'] = true;
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
        $this->initialized['endpointConfig'] = true;
        $this->endpointConfig = $endpointConfig;
        return $this;
    }
}