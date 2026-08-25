<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class AddRulesRequest implements AdditionalPropertiesInterface
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
     * @var list<RuleNoId>
     */
    protected $add;
    /**
     * @return list<RuleNoId>
     */
    public function getAdd(): array
    {
        return $this->add;
    }
    /**
     * @param list<RuleNoId> $add
     *
     * @return self
     */
    public function setAdd(array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['add' => ['add', 'getAdd', 'setAdd']];
    }
}