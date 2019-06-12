<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var null
     */
    protected $onlyNull;
    /**
     * 
     *
     * @var string|null
     */
    protected $nullOrString;
    /**
     * 
     *
     * @var string[]
     */
    protected $array;
    /**
     * 
     *
     * @var string[]
     */
    protected $object;
    /**
     * 
     *
     * @return null
     */
    public function getOnlyNull()
    {
        return $this->onlyNull;
    }
    /**
     * 
     *
     * @param null $onlyNull
     *
     * @return self
     */
    public function setOnlyNull($onlyNull) : self
    {
        $this->onlyNull = $onlyNull;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNullOrString() : ?string
    {
        return $this->nullOrString;
    }
    /**
     * 
     *
     * @param string|null $nullOrString
     *
     * @return self
     */
    public function setNullOrString(?string $nullOrString) : self
    {
        $this->nullOrString = $nullOrString;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getArray() : ?array
    {
        return $this->array;
    }
    /**
     * 
     *
     * @param string[]|null $array
     *
     * @return self
     */
    public function setArray(?array $array) : self
    {
        $this->array = $array;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getObject() : ?\ArrayObject
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param string[]|null $object
     *
     * @return self
     */
    public function setObject(?\ArrayObject $object) : self
    {
        $this->object = $object;
        return $this;
    }
}