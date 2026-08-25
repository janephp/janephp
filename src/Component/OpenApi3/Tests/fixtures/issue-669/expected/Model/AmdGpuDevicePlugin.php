<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AmdGpuDevicePlugin implements AdditionalPropertiesInterface
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
     * Indicates whether the AMD GPU Device Plugin is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Indicates whether the AMD GPU Device Plugin is enabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates whether the AMD GPU Device Plugin is enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['enabled' => ['enabled', 'getEnabled', 'setEnabled']];
    }
}