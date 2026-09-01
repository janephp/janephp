<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcUpdatable implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    public string $name;
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'description' => 'description'];
    }
}