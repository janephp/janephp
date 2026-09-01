<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CheckBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference the check.
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}