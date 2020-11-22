<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

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
     * @return TestFoo
     */
    public function getFoo() : TestFoo
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param TestFoo $foo
     *
     * @return self
     */
    public function setFoo(TestFoo $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}