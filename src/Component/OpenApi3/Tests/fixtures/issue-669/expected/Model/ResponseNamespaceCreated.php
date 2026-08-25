<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseNamespaceCreated implements AdditionalPropertiesInterface
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
     * @var NamespaceInfo
     */
    protected $namespace;
    /**
     * @return NamespaceInfo
     */
    public function getNamespace(): NamespaceInfo
    {
        return $this->namespace;
    }
    /**
     * @param NamespaceInfo $namespace
     *
     * @return self
     */
    public function setNamespace(NamespaceInfo $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['namespace' => ['namespace', 'getNamespace', 'setNamespace']];
    }
}