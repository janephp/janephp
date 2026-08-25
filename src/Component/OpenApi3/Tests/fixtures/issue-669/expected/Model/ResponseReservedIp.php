<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIp implements AdditionalPropertiesInterface
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
     * @var ReservedIp
     */
    protected $reservedIp;
    /**
     * @return ReservedIp
     */
    public function getReservedIp(): ReservedIp
    {
        return $this->reservedIp;
    }
    /**
     * @param ReservedIp $reservedIp
     *
     * @return self
     */
    public function setReservedIp(ReservedIp $reservedIp): self
    {
        $this->initialized['reservedIp'] = true;
        $this->reservedIp = $reservedIp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['reservedIp' => ['reserved_ip', 'getReservedIp', 'setReservedIp']];
    }
}