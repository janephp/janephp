<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
/**
 * @deprecated
 */
class Kernel implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @var int
     */
    public int $id;
    /**
     * The display name of the kernel. This is shown in the web UI and is generally a descriptive title for the kernel in question.
     *
     * @var string
     */
    public string $name;
    /**
     * A standard kernel version string representing the version, patch, and release information.
     *
     * @var string
     */
    public string $version;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'version' => 'version'];
    }
}