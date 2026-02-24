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
     * @var mixed|null
     */
    protected $condition;
    /**
     * Inner condition.
     *
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * Inner condition.
     *
     * @param mixed $condition
     *
     * @return self
     */
    public function setCondition($condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
}