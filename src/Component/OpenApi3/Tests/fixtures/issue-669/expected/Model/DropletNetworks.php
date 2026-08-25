<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletNetworks implements AdditionalPropertiesInterface
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
     * @var list<NetworkV4>
     */
    protected $v4;
    /**
     * @var list<NetworkV6>
     */
    protected $v6;
    /**
     * @return list<NetworkV4>
     */
    public function getV4(): array
    {
        return $this->v4;
    }
    /**
     * @param list<NetworkV4> $v4
     *
     * @return self
     */
    public function setV4(array $v4): self
    {
        $this->initialized['v4'] = true;
        $this->v4 = $v4;
        return $this;
    }
    /**
     * @return list<NetworkV6>
     */
    public function getV6(): array
    {
        return $this->v6;
    }
    /**
     * @param list<NetworkV6> $v6
     *
     * @return self
     */
    public function setV6(array $v6): self
    {
        $this->initialized['v6'] = true;
        $this->v6 = $v6;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['v4' => ['v4', 'getV4', 'setV4'], 'v6' => ['v6', 'getV6', 'setV6']];
    }
}