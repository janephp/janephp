<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GlbSettingsCdn implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A boolean flag to enable CDN caching.
     *
     * @var bool
     */
    public bool $isEnabled;
    public function definedProperties(): array
    {
        return ['isEnabled' => 'is_enabled'];
    }
}