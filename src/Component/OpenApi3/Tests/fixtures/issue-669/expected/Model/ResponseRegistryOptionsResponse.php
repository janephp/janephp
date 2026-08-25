<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseRegistryOptionsResponse implements AdditionalPropertiesInterface
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
     * @var ResponseRegistryOptionsResponseOptions
     */
    protected $options;
    /**
     * @return ResponseRegistryOptionsResponseOptions
     */
    public function getOptions(): ResponseRegistryOptionsResponseOptions
    {
        return $this->options;
    }
    /**
     * @param ResponseRegistryOptionsResponseOptions $options
     *
     * @return self
     */
    public function setOptions(ResponseRegistryOptionsResponseOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['options' => ['options', 'getOptions', 'setOptions']];
    }
}