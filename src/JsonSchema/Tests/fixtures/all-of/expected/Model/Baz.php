<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Baz
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
     * @var BazBaz
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
     * @return BazBaz
     */
    public function getBaz() : BazBaz
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param BazBaz $baz
     *
     * @return self
     */
    public function setBaz(BazBaz $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}