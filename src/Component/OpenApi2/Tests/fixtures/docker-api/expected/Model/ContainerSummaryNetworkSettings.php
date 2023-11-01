<?php

namespace Docker\Api\Model;

class ContainerSummaryNetworkSettings
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
     * 
     *
     * @var array<string, EndpointSettings>
     */
    protected $networks;
    /**
     * 
     *
     * @return array<string, EndpointSettings>
     */
    public function getNetworks() : iterable
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param array<string, EndpointSettings> $networks
     *
     * @return self
     */
    public function setNetworks(iterable $networks) : self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
}