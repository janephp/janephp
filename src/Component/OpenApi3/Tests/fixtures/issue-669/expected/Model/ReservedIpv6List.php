<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6List implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['reservedIpv6s' => ['reserved_ipv6s', 'getReservedIpv6s', 'setReservedIpv6s']];
    }
}