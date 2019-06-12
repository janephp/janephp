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
        $this->foo = $foo;
        return $this;
    }
    /**
     * 
     *
     * @return Bar|null
     */
    public function getBar() : ?Bar
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param Bar|null $bar
     *
     * @return self
     */
    public function setBar(?Bar $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return TestGetBodyBaz|null
     */
    public function getBaz() : ?TestGetBodyBaz
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param TestGetBodyBaz|null $baz
     *
     * @return self
     */
    public function setBaz(?TestGetBodyBaz $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}