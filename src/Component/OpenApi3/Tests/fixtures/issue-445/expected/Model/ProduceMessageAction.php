<?php

namespace PicturePark\API\Model;

class ProduceMessageAction extends BusinessRuleAction
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}