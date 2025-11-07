<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseFloatingIp extends \ArrayObject
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
     * @var FloatingIp
     */
    protected $floatingIp;
    /**
     * @return FloatingIp
     */
    public function getFloatingIp(): FloatingIp
    {
        return $this->floatingIp;
    }
    /**
     * @param FloatingIp $floatingIp
     *
     * @return self
     */
    public function setFloatingIp(FloatingIp $floatingIp): self
    {
        $this->initialized['floatingIp'] = true;
        $this->floatingIp = $floatingIp;
        return $this;
    }
}