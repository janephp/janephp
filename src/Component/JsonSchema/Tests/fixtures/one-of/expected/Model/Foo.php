<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Foo
{
    /**
     * 
     *
     * @var string|object|null[]
     */
    protected $foo;
    /**
     * 
     *
     * @return string|object|null[]
     */
    public function getFoo()
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string|object|null[] $foo
     *
     * @return self
     */
    public function setFoo($foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}