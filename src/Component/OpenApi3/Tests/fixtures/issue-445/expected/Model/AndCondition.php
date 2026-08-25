<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AndCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
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
     * The conditions.
     *
     * @var list<BusinessRuleCondition>|null
     */
    protected $conditions;
    /**
     * The conditions.
     *
     * @return list<BusinessRuleCondition>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }
    /**
     * The conditions.
     *
     * @param list<BusinessRuleCondition>|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['conditions' => ['conditions', 'getConditions', 'setConditions']];
    }
}