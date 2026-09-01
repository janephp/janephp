<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionResize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * When `true`, the Droplet's disk will be resized in addition to its RAM and CPU. This is a permanent change and cannot be reversed as a Droplet's disk size cannot be decreased.
     *
     * @var bool
     */
    public bool $disk;
    /**
     * The slug identifier for the size to which you wish to resize the Droplet.
     *
     * @var string
     */
    public string $size;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'disk' => 'disk', 'size' => 'size'];
    }
}