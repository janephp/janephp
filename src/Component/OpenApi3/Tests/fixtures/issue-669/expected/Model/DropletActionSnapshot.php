<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionSnapshot implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * The name to give the new snapshot of the Droplet.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'name' => 'name'];
    }
}