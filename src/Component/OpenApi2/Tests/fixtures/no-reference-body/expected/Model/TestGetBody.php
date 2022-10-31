<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TestGetBody
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
     * @var Bar
     */
    protected $bar;
    /**
     * 
     *
     * @var TestGetBodyBaz
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
     * @return Bar
     */
    public function getBar() : Bar
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param Bar $bar
     *
     * @return self
     */
    public function setBar(Bar $bar) : self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return TestGetBodyBaz
     */
    public function getBaz() : TestGetBodyBaz
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param TestGetBodyBaz $baz
     *
     * @return self
     */
    public function setBaz(TestGetBodyBaz $baz) : self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}