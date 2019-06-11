<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Parenttype
{
    /**
     * 
     *
     * @var string
     */
    protected $inheritedProperty;
    /**
     * 
     *
     * @return string|null
     */
    public function getInheritedProperty() : ?string
    {
        return $this->inheritedProperty;
    }
    /**
     * 
     *
     * @param string|null $inheritedProperty
     *
     * @return self
     */
    public function setInheritedProperty(?string $inheritedProperty) : self
    {
        $this->inheritedProperty = $inheritedProperty;
        return $this;
    }
}