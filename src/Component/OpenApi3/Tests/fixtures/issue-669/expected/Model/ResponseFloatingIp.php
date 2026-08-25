<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseFloatingIp implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['floatingIp' => ['floating_ip', 'getFloatingIp', 'setFloatingIp']];
    }
}