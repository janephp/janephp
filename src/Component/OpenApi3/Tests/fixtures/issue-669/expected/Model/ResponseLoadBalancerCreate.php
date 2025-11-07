<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseLoadBalancerCreate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var LoadBalancer
     */
    protected $loadBalancer;
    /**
     * @return LoadBalancer
     */
    public function getLoadBalancer(): LoadBalancer
    {
        return $this->loadBalancer;
    }
    /**
     * @param LoadBalancer $loadBalancer
     *
     * @return self
     */
    public function setLoadBalancer(LoadBalancer $loadBalancer): self
    {
        $this->initialized['loadBalancer'] = true;
        $this->loadBalancer = $loadBalancer;
        return $this;
    }
}