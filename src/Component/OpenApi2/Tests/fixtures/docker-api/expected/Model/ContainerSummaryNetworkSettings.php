<?php

namespace Docker\Api\Model;

class ContainerSummaryNetworkSettings
{
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
        $this->networks = $networks;
        return $this;
    }
}