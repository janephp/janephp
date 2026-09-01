<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionChangeKernel implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    public string $type;
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @var int
     */
    public int $kernel;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'kernel' => 'kernel'];
    }
}