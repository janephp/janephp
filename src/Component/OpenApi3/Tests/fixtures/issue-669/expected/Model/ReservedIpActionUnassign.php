<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpActionUnassign extends ReservedIpActionType
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}