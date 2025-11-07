<?php

namespace Jane\Generated\DigitalOcean\Model;

class LbFirewall extends \ArrayObject
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
     * the rules for denying traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @var list<string>
     */
    protected $deny = array();
    /**
     * the rules for allowing traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @var list<string>
     */
    protected $allow = array();
    /**
     * the rules for denying traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @return list<string>
     */
    public function getDeny(): array
    {
        return $this->deny;
    }
    /**
     * the rules for denying traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @param list<string> $deny
     *
     * @return self
     */
    public function setDeny(array $deny): self
    {
        $this->initialized['deny'] = true;
        $this->deny = $deny;
        return $this;
    }
    /**
     * the rules for allowing traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @return list<string>
     */
    public function getAllow(): array
    {
        return $this->allow;
    }
    /**
     * the rules for allowing traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @param list<string> $allow
     *
     * @return self
     */
    public function setAllow(array $allow): self
    {
        $this->initialized['allow'] = true;
        $this->allow = $allow;
        return $this;
    }
}