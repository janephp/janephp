<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2FirewallsFirewallIdRulesDeleteBody extends \ArrayObject
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
     * @var list<FirewallRulesInboundRulesItem>|null
     */
    protected $inboundRules;
    /**
     * @var list<FirewallRulesOutboundRulesItem>|null
     */
    protected $outboundRules;
    /**
     * @return list<FirewallRulesInboundRulesItem>|null
     */
    public function getInboundRules(): ?array
    {
        return $this->inboundRules;
    }
    /**
     * @param list<FirewallRulesInboundRulesItem>|null $inboundRules
     *
     * @return self
     */
    public function setInboundRules(?array $inboundRules): self
    {
        $this->initialized['inboundRules'] = true;
        $this->inboundRules = $inboundRules;
        return $this;
    }
    /**
     * @return list<FirewallRulesOutboundRulesItem>|null
     */
    public function getOutboundRules(): ?array
    {
        return $this->outboundRules;
    }
    /**
     * @param list<FirewallRulesOutboundRulesItem>|null $outboundRules
     *
     * @return self
     */
    public function setOutboundRules(?array $outboundRules): self
    {
        $this->initialized['outboundRules'] = true;
        $this->outboundRules = $outboundRules;
        return $this;
    }
}