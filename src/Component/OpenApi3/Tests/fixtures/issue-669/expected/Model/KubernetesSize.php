<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesSize extends \ArrayObject
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
     * A Droplet size available for use in a Kubernetes node pool.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier for a size for use when creating a new cluster.
     *
     * @var string
     */
    protected $slug;
    /**
     * A Droplet size available for use in a Kubernetes node pool.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A Droplet size available for use in a Kubernetes node pool.
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
     * The identifier for a size for use when creating a new cluster.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * The identifier for a size for use when creating a new cluster.
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
}