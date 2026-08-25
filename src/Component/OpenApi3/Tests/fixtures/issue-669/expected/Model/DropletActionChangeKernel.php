<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionChangeKernel implements AdditionalPropertiesInterface
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
     * A unique number used to identify and reference a specific kernel.
     *
     * @var int
     */
    protected $kernel;
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
     * A unique number used to identify and reference a specific kernel.
     *
     * @return int
     */
    public function getKernel(): int
    {
        return $this->kernel;
    }
    /**
     * A unique number used to identify and reference a specific kernel.
     *
     * @param int $kernel
     *
     * @return self
     */
    public function setKernel(int $kernel): self
    {
        $this->initialized['kernel'] = true;
        $this->kernel = $kernel;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'kernel' => ['kernel', 'getKernel', 'setKernel']];
    }
}