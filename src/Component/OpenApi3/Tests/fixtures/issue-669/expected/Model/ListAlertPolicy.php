<?php

namespace Jane\Generated\DigitalOcean\Model;

class ListAlertPolicy extends \ArrayObject
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
     * @var list<AlertPolicy>
     */
    protected $policies;
    /**
     * @return list<AlertPolicy>
     */
    public function getPolicies(): array
    {
        return $this->policies;
    }
    /**
     * @param list<AlertPolicy> $policies
     *
     * @return self
     */
    public function setPolicies(array $policies): self
    {
        $this->initialized['policies'] = true;
        $this->policies = $policies;
        return $this;
    }
}