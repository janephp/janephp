<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ImageUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @var string
     */
    protected $name;
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @var string
     */
    protected $distribution;
    /**
     * An optional free-form text field to describe an image.
     *
     * @var string
     */
    protected $description;
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @return string
     */
    public function getDistribution(): string
    {
        return $this->distribution;
    }
    /**
     * The name of a custom image's distribution. Currently, the valid values are  `Arch Linux`, `CentOS`, `CoreOS`, `Debian`, `Fedora`, `Fedora Atomic`,  `FreeBSD`, `Gentoo`, `openSUSE`, `RancherOS`, `Rocky Linux`, `Ubuntu`, and `Unknown`.  Any other value will be accepted but ignored, and `Unknown` will be used in its place.
     *
     * @param string $distribution
     *
     * @return self
     */
    public function setDistribution(string $distribution): self
    {
        $this->initialized['distribution'] = true;
        $this->distribution = $distribution;
        return $this;
    }
    /**
     * An optional free-form text field to describe an image.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * An optional free-form text field to describe an image.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'distribution' => ['distribution', 'getDistribution', 'setDistribution'], 'description' => ['description', 'getDescription', 'setDescription']];
    }
}