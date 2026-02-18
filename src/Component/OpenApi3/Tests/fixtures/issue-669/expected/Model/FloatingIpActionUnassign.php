<?php

namespace Jane\Generated\DigitalOcean\Model;

class FloatingIpActionUnassign extends FloatingIPsAction
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