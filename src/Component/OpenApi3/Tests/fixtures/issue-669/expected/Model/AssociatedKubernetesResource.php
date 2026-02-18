<?php

namespace Jane\Generated\DigitalOcean\Model;

class AssociatedKubernetesResource extends \ArrayObject
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
     * The ID of a resource associated with a Kubernetes cluster.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of a resource associated with a Kubernetes cluster.
     *
     * @var string
     */
    protected $name;
    /**
     * The ID of a resource associated with a Kubernetes cluster.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of a resource associated with a Kubernetes cluster.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of a resource associated with a Kubernetes cluster.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of a resource associated with a Kubernetes cluster.
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
}