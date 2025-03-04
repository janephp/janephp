<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SchemaObjectProperty extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $stringProperty;
    /**
     * 
     *
     * @return string
     */
    public function getStringProperty(): string
    {
        return $this->stringProperty;
    }
    /**
     * 
     *
     * @param string $stringProperty
     *
     * @return self
     */
    public function setStringProperty(string $stringProperty): self
    {
        $this->initialized['stringProperty'] = true;
        $this->stringProperty = $stringProperty;
        return $this;
    }
}