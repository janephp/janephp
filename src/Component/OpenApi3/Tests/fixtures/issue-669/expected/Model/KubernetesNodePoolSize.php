<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesNodePoolSize extends \ArrayObject
{
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
}