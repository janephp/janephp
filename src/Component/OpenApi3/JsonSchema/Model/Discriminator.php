<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Discriminator
{
    /**
     * 
     *
     * @var string|null
     */
    protected $propertyName;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $mapping;
    /**
     * 
     *
     * @return string|null
     */
    public function getPropertyName() : ?string
    {
        return $this->propertyName;
    }
    /**
     * 
     *
     * @param string|null $propertyName
     *
     * @return self
     */
    public function setPropertyName(?string $propertyName) : self
    {
        $this->propertyName = $propertyName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMapping() : ?iterable
    {
        return $this->mapping;
    }
    /**
     * 
     *
     * @param string[]|null $mapping
     *
     * @return self
     */
    public function setMapping(?iterable $mapping) : self
    {
        $this->mapping = $mapping;
        return $this;
    }
}