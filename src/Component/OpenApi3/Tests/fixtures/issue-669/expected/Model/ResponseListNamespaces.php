<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseListNamespaces extends \ArrayObject
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
     * @var list<NamespaceInfo>
     */
    protected $namespaces;
    /**
     * @return list<NamespaceInfo>
     */
    public function getNamespaces(): array
    {
        return $this->namespaces;
    }
    /**
     * @param list<NamespaceInfo> $namespaces
     *
     * @return self
     */
    public function setNamespaces(array $namespaces): self
    {
        $this->initialized['namespaces'] = true;
        $this->namespaces = $namespaces;
        return $this;
    }
}