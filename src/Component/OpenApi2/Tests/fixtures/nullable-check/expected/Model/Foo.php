<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Foo
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @var string|null
     */
    protected $baz;
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBar() : string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar) : self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBaz() : ?string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string|null $baz
     *
     * @return self
     */
    public function setBaz(?string $baz) : self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}