<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2DatabasesDatabaseClusterUuidFirewallPutBody extends \ArrayObject
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
     * @var list<FirewallRule>
     */
    protected $rules;
    /**
     * @return list<FirewallRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * @param list<FirewallRule> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}