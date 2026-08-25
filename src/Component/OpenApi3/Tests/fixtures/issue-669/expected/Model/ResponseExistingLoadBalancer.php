<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingLoadBalancer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['loadBalancer' => ['load_balancer', 'getLoadBalancer', 'setLoadBalancer']];
    }
}