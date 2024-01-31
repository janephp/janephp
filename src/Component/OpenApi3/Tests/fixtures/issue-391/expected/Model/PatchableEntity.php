<?php

namespace Gounlaf\JanephpBug\Model;

class PatchableEntity extends \ArrayObject
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
    protected $nullableProperty;
    /**
     * 
     *
     * @var string|null
     */
    protected $nullableAndRequiredProperty;
    /**
     * 
     *
     * @return string|null
     */
    public function getNullableProperty() : ?string
    {
        return $this->nullableProperty;
    }
    /**
     * 
     *
     * @param string|null $nullableProperty
     *
     * @return self
     */
    public function setNullableProperty(?string $nullableProperty) : self
    {
        $this->initialized['nullableProperty'] = true;
        $this->nullableProperty = $nullableProperty;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNullableAndRequiredProperty() : ?string
    {
        return $this->nullableAndRequiredProperty;
    }
    /**
     * 
     *
     * @param string|null $nullableAndRequiredProperty
     *
     * @return self
     */
    public function setNullableAndRequiredProperty(?string $nullableAndRequiredProperty) : self
    {
        $this->initialized['nullableAndRequiredProperty'] = true;
        $this->nullableAndRequiredProperty = $nullableAndRequiredProperty;
        return $this;
    }
}