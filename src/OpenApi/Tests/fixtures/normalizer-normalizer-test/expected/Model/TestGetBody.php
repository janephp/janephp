<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TestGetBody
{
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
        $this->baz = $baz;
        return $this;
    }
}