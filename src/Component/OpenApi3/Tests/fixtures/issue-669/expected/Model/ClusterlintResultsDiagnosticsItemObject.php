<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResultsDiagnosticsItemObject implements AdditionalPropertiesInterface
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
     * Name of the object
     *
     * @var string
     */
    protected $name;
    /**
     * The kind of Kubernetes API object
     *
     * @var string
     */
    protected $kind;
    /**
     * The namespace the object resides in the cluster.
     *
     * @var string
     */
    protected $namespace;
    /**
     * Name of the object
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the object
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
     * The kind of Kubernetes API object
     *
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }
    /**
     * The kind of Kubernetes API object
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * The namespace the object resides in the cluster.
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }
    /**
     * The namespace the object resides in the cluster.
     *
     * @param string $namespace
     *
     * @return self
     */
    public function setNamespace(string $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'kind' => ['kind', 'getKind', 'setKind'], 'namespace' => ['namespace', 'getNamespace', 'setNamespace']];
    }
}