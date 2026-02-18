<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpv6List extends \ArrayObject
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
     * @var list<ReservedIpv6ListReservedIpv6sItem>
     */
    protected $reservedIpv6s;
    /**
     * @return list<ReservedIpv6ListReservedIpv6sItem>
     */
    public function getReservedIpv6s(): array
    {
        return $this->reservedIpv6s;
    }
    /**
     * @param list<ReservedIpv6ListReservedIpv6sItem> $reservedIpv6s
     *
     * @return self
     */
    public function setReservedIpv6s(array $reservedIpv6s): self
    {
        $this->initialized['reservedIpv6s'] = true;
        $this->reservedIpv6s = $reservedIpv6s;
        return $this;
    }
}