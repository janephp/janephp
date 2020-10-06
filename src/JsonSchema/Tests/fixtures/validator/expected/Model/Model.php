<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Model
{
    /**
     * 
     *
     * @var string
     */
    protected $enumString;
    /**
     * 
     *
     * @var string
     */
    protected $enumArrayString;
    /**
     * 
     *
     * @var mixed
     */
    protected $enumNoType;
    /**
     * 
     *
     * @return string
     */
    public function getEnumString() : string
    {
        return $this->enumString;
    }
    /**
     * 
     *
     * @param string $enumString
     *
     * @return self
     */
    public function setEnumString(string $enumString) : self
    {
        $this->enumString = $enumString;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnumArrayString() : string
    {
        return $this->enumArrayString;
    }
    /**
     * 
     *
     * @param string $enumArrayString
     *
     * @return self
     */
    public function setEnumArrayString(string $enumArrayString) : self
    {
        $this->enumArrayString = $enumArrayString;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getEnumNoType()
    {
        return $this->enumNoType;
    }
    /**
     * 
     *
     * @param mixed $enumNoType
     *
     * @return self
     */
    public function setEnumNoType($enumNoType) : self
    {
        $this->enumNoType = $enumNoType;
        return $this;
    }
}