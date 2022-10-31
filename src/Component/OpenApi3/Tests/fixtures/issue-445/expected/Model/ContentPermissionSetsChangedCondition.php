<?php

namespace PicturePark\API\Model;

class ContentPermissionSetsChangedCondition extends BusinessRuleCondition
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