<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Options implements AdditionalPropertiesInterface
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
     * @var OptionsOptions
     */
    protected $options;
    /**
     * @var OptionsVersionAvailability
     */
    protected $versionAvailability;
    /**
     * @return OptionsOptions
     */
    public function getOptions(): OptionsOptions
    {
        return $this->options;
    }
    /**
     * @param OptionsOptions $options
     *
     * @return self
     */
    public function setOptions(OptionsOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * @return OptionsVersionAvailability
     */
    public function getVersionAvailability(): OptionsVersionAvailability
    {
        return $this->versionAvailability;
    }
    /**
     * @param OptionsVersionAvailability $versionAvailability
     *
     * @return self
     */
    public function setVersionAvailability(OptionsVersionAvailability $versionAvailability): self
    {
        $this->initialized['versionAvailability'] = true;
        $this->versionAvailability = $versionAvailability;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['options' => ['options', 'getOptions', 'setOptions'], 'versionAvailability' => ['version_availability', 'getVersionAvailability', 'setVersionAvailability']];
    }
}