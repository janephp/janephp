<?php

namespace Docker\Api\Model;

class ServiceEndpoint
{
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    protected $spec;
    /**
     * 
     *
     * @var EndpointPortConfig[]
     */
    protected $ports;
    /**
     * 
     *
     * @var ServiceEndpointVirtualIPsItem[]
     */
    protected $virtualIPs;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @return EndpointSpec
     */
    public function getSpec() : EndpointSpec
    {
        return $this->spec;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @param EndpointSpec $spec
     *
     * @return self
     */
    public function setSpec(EndpointSpec $spec) : self
    {
        $this->spec = $spec;
        return $this;
    }
    /**
     * 
     *
     * @return EndpointPortConfig[]
     */
    public function getPorts() : array
    {
        return $this->ports;
    }
    /**
     * 
     *
     * @param EndpointPortConfig[] $ports
     *
     * @return self
     */
    public function setPorts(array $ports) : self
    {
        $this->ports = $ports;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceEndpointVirtualIPsItem[]
     */
    public function getVirtualIPs() : array
    {
        return $this->virtualIPs;
    }
    /**
     * 
     *
     * @param ServiceEndpointVirtualIPsItem[] $virtualIPs
     *
     * @return self
     */
    public function setVirtualIPs(array $virtualIPs) : self
    {
        $this->virtualIPs = $virtualIPs;
        return $this;
    }
}