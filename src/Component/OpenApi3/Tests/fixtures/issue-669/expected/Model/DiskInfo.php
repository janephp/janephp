<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DiskInfo implements AdditionalPropertiesInterface
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
     * The type of disk. All Droplets contain a `local` disk. Additionally, GPU Droplets can also have a `scratch` disk for non-persistent data.
     *
     * @var string
     */
    protected $type;
    /**
     * @var DiskInfoSize
     */
    protected $size;
    /**
     * The type of disk. All Droplets contain a `local` disk. Additionally, GPU Droplets can also have a `scratch` disk for non-persistent data.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of disk. All Droplets contain a `local` disk. Additionally, GPU Droplets can also have a `scratch` disk for non-persistent data.
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
     * @return DiskInfoSize
     */
    public function getSize(): DiskInfoSize
    {
        return $this->size;
    }
    /**
     * @param DiskInfoSize $size
     *
     * @return self
     */
    public function setSize(DiskInfoSize $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'size' => ['size', 'getSize', 'setSize']];
    }
}