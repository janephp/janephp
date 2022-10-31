<?php

namespace PicturePark\API\Model;

class LayersChangedCondition extends BusinessRuleCondition
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}