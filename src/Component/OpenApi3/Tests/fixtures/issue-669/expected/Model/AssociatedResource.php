<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the resource associated with the Droplet.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of the resource associated with the Droplet.
     *
     * @var string
     */
    public string $name;
    /**
     * The cost of the resource in USD per month if the resource is retained after the Droplet is destroyed.
     *
     * @var string
     */
    public string $cost;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'cost' => 'cost'];
    }
}