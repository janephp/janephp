<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionResize implements AdditionalPropertiesInterface
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
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    protected $type;
    /**
     * When `true`, the Droplet's disk will be resized in addition to its RAM and CPU. This is a permanent change and cannot be reversed as a Droplet's disk size cannot be decreased.
     *
     * @var bool
     */
    protected $disk;
    /**
     * The slug identifier for the size to which you wish to resize the Droplet.
     *
     * @var string
     */
    protected $size;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the Droplet.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * When `true`, the Droplet's disk will be resized in addition to its RAM and CPU. This is a permanent change and cannot be reversed as a Droplet's disk size cannot be decreased.
     *
     * @return bool
     */
    public function getDisk(): bool
    {
        return $this->disk;
    }
    /**
     * When `true`, the Droplet's disk will be resized in addition to its RAM and CPU. This is a permanent change and cannot be reversed as a Droplet's disk size cannot be decreased.
     *
     * @param bool $disk
     *
     * @return self
     */
    public function setDisk(bool $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;
        return $this;
    }
    /**
     * The slug identifier for the size to which you wish to resize the Droplet.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The slug identifier for the size to which you wish to resize the Droplet.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'disk' => ['disk', 'getDisk', 'setDisk'], 'size' => ['size', 'getSize', 'setSize']];
    }
}