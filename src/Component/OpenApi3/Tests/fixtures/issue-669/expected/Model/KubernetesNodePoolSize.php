<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesNodePoolSize implements AdditionalPropertiesInterface
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
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @var string
     */
    protected $size;
    /**
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The slug identifier for the type of Droplet used as workers in the node pool.
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
        return ['size' => ['size', 'getSize', 'setSize']];
    }
}