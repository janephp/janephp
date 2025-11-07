<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesRegion extends \ArrayObject
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
     * A DigitalOcean region where Kubernetes is available.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier for a region for use when creating a new cluster.
     *
     * @var string
     */
    protected $slug;
    /**
     * A DigitalOcean region where Kubernetes is available.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A DigitalOcean region where Kubernetes is available.
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
     * The identifier for a region for use when creating a new cluster.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * The identifier for a region for use when creating a new cluster.
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