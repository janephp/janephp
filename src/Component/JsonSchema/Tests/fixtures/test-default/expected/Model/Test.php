<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * @var string|null
     */
    protected $string = 'content';
    /**
     * @var bool|null
     */
    protected $bool = true;
    /**
     * @var int|null
     */
    protected $integer = 10;
    /**
     * @var float|null
     */
    protected $float = 3.4;
    /**
     * @var list<mixed>|null
     */
    protected $array = array(0 => 'value');
    /**
     * @var list<mixed>|null
     */
    protected $object = array('key' => 'value');
    /**
     * @var TestSubObject|null
     */
    protected $subObject;
    /**
     * @return string|null
     */
    public function getString(): ?string
    {
        return $this->string;
    }
    /**
     * @param string|null $string
     *
     * @return self
     */
    public function setString(?string $string): self
    {
        $this->initialized['string'] = true;
        $this->string = $string;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getBool(): ?bool
    {
        return $this->bool;
    }
    /**
     * @param bool|null $bool
     *
     * @return self
     */
    public function setBool(?bool $bool): self
    {
        $this->initialized['bool'] = true;
        $this->bool = $bool;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getInteger(): ?int
    {
        return $this->integer;
    }
    /**
     * @param int|null $integer
     *
     * @return self
     */
    public function setInteger(?int $integer): self
    {
        $this->initialized['integer'] = true;
        $this->integer = $integer;
        return $this;
    }
    /**
     * @return float|null
     */
    public function getFloat(): ?float
    {
        return $this->float;
    }
    /**
     * @param float|null $float
     *
     * @return self
     */
    public function setFloat(?float $float): self
    {
        $this->initialized['float'] = true;
        $this->float = $float;
        return $this;
    }
    /**
     * @return list<mixed>|null
     */
    public function getArray(): ?array
    {
        return $this->array;
    }
    /**
     * @param list<mixed>|null $array
     *
     * @return self
     */
    public function setArray(?array $array): self
    {
        $this->initialized['array'] = true;
        $this->array = $array;
        return $this;
    }
    /**
     * @return list<mixed>|null
     */
    public function getObject(): ?array
    {
        return $this->object;
    }
    /**
     * @param list<mixed>|null $object
     *
     * @return self
     */
    public function setObject(?array $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * @return TestSubObject|null
     */
    public function getSubObject(): ?TestSubObject
    {
        return $this->subObject;
    }
    /**
     * @param TestSubObject|null $subObject
     *
     * @return self
     */
    public function setSubObject(?TestSubObject $subObject): self
    {
        $this->initialized['subObject'] = true;
        $this->subObject = $subObject;
        return $this;
    }
}