<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsImageSourceSpecDeployOnPush implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether to automatically deploy new images. Can only be used for images hosted in DOCR and can only be used with an image tag, not a specific digest.
     *
     * @var bool
     */
    public bool $enabled;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled'];
    }
}