<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidFirewallPutBody implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['rules' => ['rules', 'getRules', 'setRules']];
    }
}