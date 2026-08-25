<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6 implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['reservedIpv6' => ['reserved_ipv6', 'getReservedIpv6', 'setReservedIpv6']];
    }
}