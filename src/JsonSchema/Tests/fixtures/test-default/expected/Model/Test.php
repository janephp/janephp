<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var string
     */
    protected $string = 'content';
    /**
     * 
     *
     * @var bool
     */
    protected $bool = true;
    /**
     * 
     *
     * @var int
     */
    protected $integer = 10;
    /**
     * 
     *
     * @var float
     */
    protected $float = 3.4;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $array;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $object;
    /**
     * 
     *
     * @var TestSubObject
     */
    protected $subObject;
    /**
     * 
     *
     * @return string
     */
    public function getString() : ?string
    {
        return $this->string;
    }
    /**
     * 
     *
     * @param string $string
     *
     * @return self
     */
    public function setString(?string $string) : self
    {
        $this->string = $string;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBool() : ?bool
    {
        return $this->bool;
    }
    /**
     * 
     *
     * @param bool $bool
     *
     * @return self
     */
    public function setBool(?bool $bool) : self
    {
        $this->bool = $bool;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInteger() : ?int
    {
        return $this->integer;
    }
    /**
     * 
     *
     * @param int $integer
     *
     * @return self
     */
    public function setInteger(?int $integer) : self
    {
        $this->integer = $integer;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFloat() : ?float
    {
        return $this->float;
    }
    /**
     * 
     *
     * @param float $float
     *
     * @return self
     */
    public function setFloat(?float $float) : self
    {
        $this->float = $float;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getArray() : ?array
    {
        return $this->array;
    }
    /**
     * 
     *
     * @param mixed[] $array
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
     * @return mixed[]
     */
    public function getObject() : ?array
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param mixed[] $object
     *
     * @return self
     */
    public function setObject(?array $object) : self
    {
        $this->object = $object;
        return $this;
    }
    /**
     * 
     *
     * @return TestSubObject
     */
    public function getSubObject() : ?TestSubObject
    {
        return $this->subObject;
    }
    /**
     * 
     *
     * @param TestSubObject $subObject
     *
     * @return self
     */
    public function setSubObject(?TestSubObject $subObject) : self
    {
        $this->subObject = $subObject;
        return $this;
    }
}