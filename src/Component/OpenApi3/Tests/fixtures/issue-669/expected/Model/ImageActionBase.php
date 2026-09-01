<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ImageActionBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The action to be taken on the image. Can be either `convert` or `transfer`.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}