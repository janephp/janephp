<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Options implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var OptionsOptions
     */
    public OptionsOptions $options;
    /**
     * @var OptionsVersionAvailability
     */
    public OptionsVersionAvailability $versionAvailability;
    public function definedProperties(): array
    {
        return ['options' => 'options', 'versionAvailability' => 'version_availability'];
    }
}