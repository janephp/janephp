<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpv6ActionUnassign extends ReservedIpv6ActionType
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