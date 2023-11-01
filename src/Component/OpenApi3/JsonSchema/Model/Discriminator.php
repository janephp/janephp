<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Discriminator
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $propertyName;
    /**
     * 
     *
     * @var array<string, string>|null
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
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>|null
     */
    public function getMapping() : ?iterable
    {
        return $this->mapping;
    }
    /**
     * 
     *
     * @param array<string, string>|null $mapping
     *
     * @return self
     */
    public function setMapping(?iterable $mapping) : self
    {
        $this->initialized['mapping'] = true;
        $this->mapping = $mapping;
        return $this;
    }
}