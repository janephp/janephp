<?php

namespace PicturePark\API\Model;

class OrCondition extends BusinessRuleCondition
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The conditions.
     *
     * @var BusinessRuleCondition[]|null
     */
    protected $conditions;
    /**
     * The conditions.
     *
     * @return BusinessRuleCondition[]|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * The conditions.
     *
     * @param BusinessRuleCondition[]|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
}