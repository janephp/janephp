<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAlertPolicyResponse extends \ArrayObject
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
     * @var AlertPolicy
     */
    protected $policy;
    /**
     * @return AlertPolicy
     */
    public function getPolicy(): AlertPolicy
    {
        return $this->policy;
    }
    /**
     * @param AlertPolicy $policy
     *
     * @return self
     */
    public function setPolicy(AlertPolicy $policy): self
    {
        $this->initialized['policy'] = true;
        $this->policy = $policy;
        return $this;
    }
}