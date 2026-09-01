<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ImageUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @var string
     */
    public string $name;
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @var string
     */
    public string $distribution;
    /**
     * An optional free-form text field to describe an image.
     *
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'distribution' => 'distribution', 'description' => 'description'];
    }
}