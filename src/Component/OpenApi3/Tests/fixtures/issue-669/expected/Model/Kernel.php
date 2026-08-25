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
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @var int
     */
    protected $id;
    /**
     * The display name of the kernel. This is shown in the web UI and is generally a descriptive title for the kernel in question.
     *
     * @var string
     */
    protected $name;
    /**
     * A standard kernel version string representing the version, patch, and release information.
     *
     * @var string
     */
    protected $version;
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The display name of the kernel. This is shown in the web UI and is generally a descriptive title for the kernel in question.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name of the kernel. This is shown in the web UI and is generally a descriptive title for the kernel in question.
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
     * A standard kernel version string representing the version, patch, and release information.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * A standard kernel version string representing the version, patch, and release information.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'version' => ['version', 'getVersion', 'setVersion']];
    }
}