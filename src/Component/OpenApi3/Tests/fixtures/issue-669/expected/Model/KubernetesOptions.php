<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesOptions implements AdditionalPropertiesInterface
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
     * @var KubernetesOptionsOptions
     */
    protected $options;
    /**
     * @return KubernetesOptionsOptions
     */
    public function getOptions(): KubernetesOptionsOptions
    {
        return $this->options;
    }
    /**
     * @param KubernetesOptionsOptions $options
     *
     * @return self
     */
    public function setOptions(KubernetesOptionsOptions $options): self
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