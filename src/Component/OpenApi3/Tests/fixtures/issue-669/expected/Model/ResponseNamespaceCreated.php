<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseNamespaceCreated extends \ArrayObject
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
}