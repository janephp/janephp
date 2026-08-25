<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ListAlertPolicy implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['policies' => ['policies', 'getPolicies', 'setPolicies']];
    }
}