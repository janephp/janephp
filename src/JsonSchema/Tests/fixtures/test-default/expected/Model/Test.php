<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var string|null
     */
    protected $string = 'content';
    /**
     * 
     *
     * @var bool|null
     */
    protected $bool = true;
    /**
     * 
     *
     * @var int|null
     */
    protected $integer = 10;
    /**
     * 
     *
     * @var float|null
     */
    protected $float = 3.4;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $array = array(0 => 'value');
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $object = array('key' => 'value');
    /**
     * 
     *
     * @var TestSubObject|null
     */
    protected $subObject;
    /**
     * 
     *
     * @return string|null
     */
    public function getString() : ?string
    {
        return $this->string;
    }
    /**
     * 
     *
     * @param string|null $string
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
     * @return bool|null
     */
    public function getBool() : ?bool
    {
        return $this->bool;
    }
    /**
     * 
     *
     * @param bool|null $bool
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
     * @return int|null
     */
    public function getInteger() : ?int
    {
        return $this->integer;
    }
    /**
     * 
     *
     * @param int|null $integer
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
     * @return float|null
     */
    public function getFloat() : ?float
    {
        return $this->float;
    }
    /**
     * 
     *
     * @param float|null $float
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
     * @return mixed[]|null
     */
    public function getArray() : ?array
    {
        return $this->array;
    }
    /**
     * 
     *
     * @param mixed[]|null $array
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
     * @return mixed[]|null
     */
    public function getObject() : ?array
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param mixed[]|null $object
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
     * @return TestSubObject|null
     */
    public function getSubObject() : ?TestSubObject
    {
        return $this->subObject;
    }
    /**
     * 
     *
     * @param TestSubObject|null $subObject
     *
     * @return self
     */
    public function setSubObject(?TestSubObject $subObject) : self
    {
        $this->subObject = $subObject;
        return $this;
    }
}