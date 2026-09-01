<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionRebuild implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * The image ID of a public or private image or the slug identifier for a public image. The Droplet will be rebuilt using this image as its base.
     *
     * @var string|int
     */
    public $image;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'image' => 'image'];
    }
}