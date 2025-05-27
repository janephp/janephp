<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Childtype
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
     * @var string
     */
    protected $childProperty;
    /**
     * @var string
     */
    protected $inheritedProperty;
    /**
     * @return string
     */
    public function getChildProperty(): string
    {
        return $this->childProperty;
    }
    /**
     * @param string $childProperty
     *
     * @return self
     */
    public function setChildProperty(string $childProperty): self
    {
        $this->initialized['childProperty'] = true;
        $this->childProperty = $childProperty;
        return $this;
    }
    /**
     * @return string
     */
    public function getInheritedProperty(): string
    {
        return $this->inheritedProperty;
    }
    /**
     * @param string $inheritedProperty
     *
     * @return self
     */
    public function setInheritedProperty(string $inheritedProperty): self
    {
        $this->initialized['inheritedProperty'] = true;
        $this->inheritedProperty = $inheritedProperty;
        return $this;
    }
}