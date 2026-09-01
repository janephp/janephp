<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionRestore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * The ID of a backup of the current Droplet instance to restore from.
     *
     * @var int
     */
    public int $image;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'image' => 'image'];
    }
}