<?php

namespace Docker\Api\Model;

class NetworkingConfig
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @var EndpointSettings[]
     */
    protected $endpointsConfig;
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @return EndpointSettings[]
     */
    public function getEndpointsConfig() : iterable
    {
        return $this->endpointsConfig;
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @param EndpointSettings[] $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(iterable $endpointsConfig) : self
    {
        $this->initialized['endpointsConfig'] = true;
        $this->endpointsConfig = $endpointsConfig;
        return $this;
    }
}