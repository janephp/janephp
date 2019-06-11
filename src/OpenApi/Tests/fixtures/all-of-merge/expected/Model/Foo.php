<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Foo
{
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * A description
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @return string|null
     */
    public function getBar() : ?string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string|null $bar
     *
     * @return self
     */
    public function setBar(?string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
    /**
     * A description
     *
     * @return string|null
     */
    public function getFoo() : ?string
    {
        return $this->foo;
    }
    /**
     * A description
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
}