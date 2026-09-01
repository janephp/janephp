<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGetInstanceSizeResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AppsInstanceSize
     */
    public AppsInstanceSize $instanceSize;
    public function definedProperties(): array
    {
        return ['instanceSize' => 'instance_size'];
    }
}