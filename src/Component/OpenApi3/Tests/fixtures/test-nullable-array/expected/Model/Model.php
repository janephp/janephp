<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Model extends \ArrayObject
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
    protected $foo;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $bar;
    /**
     * 
     *
     * @return string|null
     */
    public function getFoo() : ?string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string|null $foo
     *
     * @return self
     */
    public function setFoo(?string $foo) : self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getBar() : ?array
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param mixed[]|null $bar
     *
     * @return self
     */
    public function setBar(?array $bar) : self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}