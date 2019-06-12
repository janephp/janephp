<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var TestFoo
     */
    protected $foo;
    /**
     * 
     *
     * @return TestFoo|null
     */
    public function getFoo() : ?TestFoo
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param TestFoo|null $foo
     *
     * @return self
     */
    public function setFoo(?TestFoo $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}