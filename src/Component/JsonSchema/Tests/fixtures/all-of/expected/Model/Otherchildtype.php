<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Otherchildtype
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
    protected $inheritedProperty;
    /**
     * @var string
     */
    protected $childProperty;
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
}