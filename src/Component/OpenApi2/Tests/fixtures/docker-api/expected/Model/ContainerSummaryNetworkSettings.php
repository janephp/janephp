<?php

namespace Docker\Api\Model;

class ContainerSummaryNetworkSettings
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
     * 
     *
     * @var EndpointSettings[]
     */
    protected $networks;
    /**
     * 
     *
     * @return EndpointSettings[]
     */
    public function getNetworks() : iterable
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param EndpointSettings[] $networks
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