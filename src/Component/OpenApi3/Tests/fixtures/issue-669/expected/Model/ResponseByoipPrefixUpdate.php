<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseByoipPrefixUpdate implements AdditionalPropertiesInterface
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
     * @var ByoipPrefix
     */
    protected $byoipPrefix;
    /**
     * @return ByoipPrefix
     */
    public function getByoipPrefix(): ByoipPrefix
    {
        return $this->byoipPrefix;
    }
    /**
     * @param ByoipPrefix $byoipPrefix
     *
     * @return self
     */
    public function setByoipPrefix(ByoipPrefix $byoipPrefix): self
    {
        $this->initialized['byoipPrefix'] = true;
        $this->byoipPrefix = $byoipPrefix;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['byoipPrefix' => ['byoip_prefix', 'getByoipPrefix', 'setByoipPrefix']];
    }
}