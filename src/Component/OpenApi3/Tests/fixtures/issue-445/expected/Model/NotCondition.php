<?php

namespace PicturePark\API\Model;

class NotCondition extends BusinessRuleCondition
{
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
    public function setCondition($condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
}