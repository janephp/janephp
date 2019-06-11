<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Bar
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
     * @var string
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
        $this->foo = $foo;
        return $this;
    }
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
}