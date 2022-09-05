<?php

namespace PicturePark\API\Model;

class BooleanCondition extends BusinessRuleCondition
{
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
        $this->conditions = $conditions;
        return $this;
    }
}