<?php

namespace PicturePark\API\Model;

class NotCondition extends BusinessRuleCondition
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
     * Inner condition.
     *
     * @var BusinessRuleCondition|null
     */
    protected $condition;
    /**
     * Inner condition.
     *
     * @return BusinessRuleCondition|null
     */
    public function getCondition(): ?BusinessRuleCondition
    {
        return $this->condition;
    }
    /**
     * Inner condition.
     *
     * @param BusinessRuleCondition|null $condition
     *
     * @return self
     */
    public function setCondition(?BusinessRuleCondition $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
}