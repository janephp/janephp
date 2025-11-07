<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpv6 extends \ArrayObject
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
     * @var ReservedIpv6
     */
    protected $reservedIpv6;
    /**
     * @return ReservedIpv6
     */
    public function getReservedIpv6(): ReservedIpv6
    {
        return $this->reservedIpv6;
    }
    /**
     * @param ReservedIpv6 $reservedIpv6
     *
     * @return self
     */
    public function setReservedIpv6(ReservedIpv6 $reservedIpv6): self
    {
        $this->initialized['reservedIpv6'] = true;
        $this->reservedIpv6 = $reservedIpv6;
        return $this;
    }
}