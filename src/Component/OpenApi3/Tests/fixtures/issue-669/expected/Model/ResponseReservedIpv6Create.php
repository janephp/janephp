<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpv6Create extends \ArrayObject
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
     * @var ResponseReservedIpv6CreateReservedIpv6
     */
    protected $reservedIpv6;
    /**
     * @return ResponseReservedIpv6CreateReservedIpv6
     */
    public function getReservedIpv6(): ResponseReservedIpv6CreateReservedIpv6
    {
        return $this->reservedIpv6;
    }
    /**
     * @param ResponseReservedIpv6CreateReservedIpv6 $reservedIpv6
     *
     * @return self
     */
    public function setReservedIpv6(ResponseReservedIpv6CreateReservedIpv6 $reservedIpv6): self
    {
        $this->initialized['reservedIpv6'] = true;
        $this->reservedIpv6 = $reservedIpv6;
        return $this;
    }
}