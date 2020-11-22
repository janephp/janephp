<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema1\Model;

class Test
{
    /**
     * 
     *
     * @var \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo
     */
    protected $foo;
    /**
     * 
     *
     * @return \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo
     */
    public function getFoo() : \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo $foo
     *
     * @return self
     */
    public function setFoo(\Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}