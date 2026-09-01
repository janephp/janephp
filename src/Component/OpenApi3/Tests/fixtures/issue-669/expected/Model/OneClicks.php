<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OneClicks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the 1-Click application.
     *
     * @var string
     */
    public string $slug;
    /**
     * The type of the 1-Click application.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['slug' => 'slug', 'type' => 'type'];
    }
}